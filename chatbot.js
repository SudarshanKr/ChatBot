const chatbotForm = document.querySelector("#chatbot form");
const chatbotMessages = document.querySelector("#chatbot-messages");

chatbotForm.addEventListener("keypress", (event) => {
	if (event.keyCode === 13) {
		event.preventDefault();
		chatbotForm.submit();
	}
});
function scrollToBottom() {
	chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
}
function addUserMessage(message) {
	const messageElement = document.createElement("div");
	messageElement.className = "message message-user";
	messageElement.textContent = message;
	chatbotMessages.appendChild(messageElement);
	scrollToBottom();
}

function addBotMessage(message) {
	const messageElement = document.createElement("div");
	messageElement.className = "message message-bot";
	messageElement.textContent = message;
	chatbotMessages.appendChild(messageElement);
	scrollToBottom();
}
chatbotForm.addEventListener("submit", (event) => {
	event.preventDefault();

	const message = chatbotForm.elements.message.value.trim();

	if (message === "") {
		return;
	}
	chatbotForm.elements.message.value = "";

	addUserMessage(message);

	const xhr = new XMLHttpRequest();
	xhr.open("POST", "chatbot.php");
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.onload = () => {
		const response = xhr.responseText.trim();
		addBotMessage(response);
	};
	xhr.send("message=" + encodeURIComponent(message));
});
