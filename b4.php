<!DOCTYPE html>
<html>
<head>
	<title>Đồng hồ</title>
	<style>
		.clock {
			font-family: Arial, sans-serif;
			font-size: 3rem;
			color: black;
		}

		.clock span {
			margin-right: 10px;
		}

		.countdown {
			margin-top: 30px;
			display: flex;
			flex-direction: column;
			align-items: center;
			font-family: Arial, sans-serif;
			font-size: 1.5rem;
			color: black;
		}

		.countdown input {
			margin-right: 10px;
			padding: 5px;
			font-size: 1.5rem;
			text-align: center;
		}

		.countdown button {
			padding: 5px 10px;
			background-color: #008CBA;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		.control {
			margin-top: 20px;
			display: flex;
			justify-content: center;
			align-items: center;
			font-family: Arial, sans-serif;
			font-size: 1.2rem;
			color: black;
		}

		.control label {
			margin-right: 10px;
		}

		.control button {
			margin-left: 10px;
			padding: 5px 10px;
			background-color: #008CBA;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="clock"></div>
	<div class="countdown">
		<div>
			<label for="hours">Giờ:</label>
			<input type="number" id="hours" min="0" max="23" value="0">
			<label for="minutes">Phút:</label>
			<input type="number" id="minutes" min="0" max="59" value="0">
			<label for="seconds">Giây:</label>
			<input type="number" id="seconds" min="0" max="59" value="0">
		</div>
		<button id="start-countdown">Bắt đầu đếm ngược</button>
		<button id="stop-countdown">Dừng đếm ngược</button>
		<div id="countdown-timer"></div>
	</div>
	<div class="control">
		<label for="font-type">Kiểu chữ:</label>
		<select id="font-type">
			<option value="Arial">Arial</option>
			<option value="Times New Roman">Times New Roman</option>
			<option value="Courier New">Courier New</option>
			<option value="Georgia">Georgia</option>
			<option value="Verdana">Verdana</option>
		</select>
		<label for="font-color">Màu chữ:</label>
		<input type="color" id="font-color" value="#000000">
		<label for="font-size">Kích thước chữ:</label>
		<select id="font-size">
			<option value="1rem">1</option>
			<option value="1.5rem" selected>1.5</option>
			<option value="2rem">2</option>
            <option value="2rem">2</tùy chọn>
            <option value="2,5rem<giá trị tùy chọn = "2,5rem">2.5</option> 
            <option value="3rem<giá trị tùy chọn = "3rem">3</option> </chọn</chọn>
        </div> <kịch bản<kịch bản>
        <div>
	<label for="font-type">Phông chữ:</label>
	<select id="font-type">
		<option value="Arial">Arial</option>
		<option value="Helvetica">Helvetica</option>
		<option value="Times New Roman">Times New Roman</option>
		<option value="Courier New">Courier New</option>
	</select>
	<label for="font-color">Màu chữ:</label>
	<input type="color" id="font-color" value="#000000">
	<label for="font-size">Kích thước chữ:</label>
	<select id="font-size">
		<option value="1rem">1</option>
		<option value="1.5rem" selected>1.5</option>
		<option value="2rem">2</option>
		<option value="2.5rem">2.5</option> 
		<option value="3rem">3</option>
	</select>
</div>
<div>
	<label for="font-type">Phông chữ:</label>
	<select id="font-type">
		<option value="Arial">Arial</option>
		<option value="Helvetica">Helvetica</option>
		<option value="Times New Roman">Times New Roman</option>
		<option value="Courier New">Courier New</option>
	</select>
	<label for="font-color">Màu chữ:</label>
	<input type="color" id="font-color" value="#000000">
	<label for="font-size">Kích thước chữ:</label>
	<select id="font-size">
		<option value="1rem">1</option>
		<option value="1.5rem" selected>1.5</option>
		<option value="2rem">2</option>
		<option value="2.5rem">2.5</option> 
		<option value="3rem">3</option>
	</select>
</div>

<script>
	const clock = document.querySelector('.clock');
	const sportTimerForm = document.getElementById('sport-timer-form');
	const sportTimerInput = document.getElementById('sport-timer-input');
	const sportTimerButton = document.getElementById('sport-timer-button');
	const fontTypeSelect = document.getElementById('font-type');
	const fontColorInput = document.getElementById('font-color');
	const fontSizeSelect = document.getElementById('font-size');

	function updateClock() {
		const now = new Date();
		clock.textContent = now.toLocaleTimeString();
	}

	function startSportTimer() {
		const timeInput = sportTimerInput.value.split(':');
		const hours = parseInt(timeInput[0]);
		const minutes = parseInt(timeInput[1]);
		const seconds = parseInt(timeInput[2]);
		let remainingSeconds = hours * 3600 + minutes * 60 + seconds;
		const sportTimerInterval = setInterval(() => {
			remainingSeconds--;
			if (remainingSeconds <= 0) {
				clearInterval(sportTimerInterval);
				alert('Time is up!');
			}
			const hoursLeft = Math.floor(remainingSeconds / 3600);
			const minutesLeft = Math.floor((remainingSeconds - hoursLeft * 3600) / 60);
			const secondsLeft = remainingSeconds - hoursLeft * 3600 - minutesLeft * 60;
			clock.textContent = `${hoursLeft.toString().padStart(2, '0')}:${minutesLeft.toString().padStart(2, '0')}:${secondsLeft.toString().padStart(2, '0')}`;
		}, 1000);
	}

	sportTimerForm.addEventListener('submit', (event) => {
		event.preventDefault();
		startSportTimer();
	});

	fontTypeSelect.addEventListener('change', () => {
		clock.style.fontFamily = fontTypeSelect.value;
	});

	fontColorInput.addEventListener('input', () => {
		clock.style.color = fontColorInput.value;
	});

	fontSizeSelect.addEventListener('change', () => {
		clock.style.fontSize = fontSizeSelect.value;
	});

	setInterval(updateClock, 1000);
</script>

</script>
</body>
</html>
