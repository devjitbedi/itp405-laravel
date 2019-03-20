
let connection = new WebSocket('wss://dbedi-websockets.herokuapp.com');

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
  const range = window.getSelection();
  range.selectAllChildren(edit);
   range.collapseToEnd();

};

document.getElementById('edit').addEventListener('input', (event) => {
  event.preventDefault();

  let message = document.getElementById('edit').innerText;

  connection.send(message);
});