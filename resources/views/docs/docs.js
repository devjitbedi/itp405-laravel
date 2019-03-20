
let connection = new WebSocket('ws://dbedi-websockets.herokuapp.com/');

connection.onopen = () => {
  console.log('connected from the frontend');

};

connection.onerror = () => {
  console.log('failed to connect from the frontend');
};

connection.onmessage = (event) => {
  console.log('received message', event.data);
  let edit = document.getElementById('edit');
  edit.innerText = event.data;
};

document.getElementById('edit').addEventListener('input', (event) => {
  event.preventDefault();

  let edit = document..getElementById('edit').value;
  connection.send(message);
});