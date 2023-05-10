
const submitButton = document.querySelector('#submit');
const outputElement = document.querySelector('#output')
const inputElement = document.querySelector('input')
const historyElement = document.querySelector('.history')
const buttonElement = document.querySelector('button')

function changeInput () {
   const inputElement = document.querySelector('input')
   inputElement.value = value
}

async function getApiKey() {
    try {
      const response = await fetch('/api/get-api-key'); // Modify the URL to your backend endpoint that returns the API key
      const data = await response.json();
      return data.apiKey; // Assuming the response JSON has a key named 'apiKey'
    } catch (error) {
     console.error(error);
    }
  }

async function getMessage(){
    console.log('clicked');
    const apiKey = await getApiKey();
    const options = {
        method: 'POST',
        headers: {
            'Authorization': `Bearer ${apiKey}`,
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            model: 'gpt-3.5-turbo',
            messages: [{role: 'user', content: inputElement.value}],
            max_tokens: 400 
        })
    }
    try {
        const response = await fetch('https://api.openai.com/v1/chat/completions', options)
        const data = await response.json()
        console.log(data)
        outputElement.textContent = data.choices[0].message.content
        if (data.choices[0].message.content && inputElement.value) {
            const pElement = document.createElement('p')
            pElement.textContent = inputElement.value
            pElement.addEventListener('click', () => changeInput(pElement.textContent))
            historyElement.append(pElement)
        }
    } catch (error) {
        console.error(error);
    }
}

submitButton.addEventListener('click', getMessage)

function clearInput () {
    inputElement.value = ''
}

buttonElement.addEventListener('click', clearInput)