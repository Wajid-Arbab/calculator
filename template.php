<!Doctype html>
<html>
	<head>
		<title>
			Calculator
		</title>
		<link rel = "stylesheet" type = "text/css" href = "style.css" media = "screen" />
	</head>
	<body>
		<form name = "calculator">
			<tr>
				<th>
					<h3>
						<i>Simple Calculator</i>
						<br />
					</h3>
				</th>
					<input type = "textfield" disabled value = "" name = "ans" class = "field" placeholder = "Enter Dogit with your choice" />
			<br />
				<table>
				
					<td class = "properD">
					
				<br />
						<input type = "reset" value = "C" class = "widht">
						<input type = "button" value = "%" onclick = "document.calculator.ans.value += '%'" class = "fix">
						<input type = "button" value = "/" onclick = "document.calculator.ans.value += '/'" class = "fix">
					
				<br />	
						<input type = "button" class = "fix" value = "7" onclick = "document.calculator.ans.value += '7'">
						<input type = "button" class = "fix" value = "8" onclick = "document.calculator.ans.value += '8'">
						<input type = "button" class = "fix" value = "9" onclick = "document.calculator.ans.value += '9'">
						<input type = "button" class = "fix" value = "*" onclick = "document.calculator.ans.value += '*'">
					
				<br />
						<input type = "button" class = "fix" value = "4" onclick = "document.calculator.ans.value += '4'">
						<input type = "button" class = "fix" value = "5" onclick = "document.calculator.ans.value += '5'">
						<input type = "button" class = "fix" value = "6" onclick = "document.calculator.ans.value += '6'">
						<input type = "button" class = "fix" value = "-" onclick = "document.calculator.ans.value += '-'">
					
				<br />	
					
						<input type = "button" value = "1" class = "fix" onclick = "document.calculator.ans.value += '1'">
						<input type = "button" value = "2" class = "fix" onclick = "document.calculator.ans.value += '2'">
						<input type = "button" value = "3" class = "fix" onclick = "document.calculator.ans.value += '3'">
						<input type = "button" value = "+" class = "fix" onclick = "document.calculator.ans.value += '+'">
					
				<br />	
					
						<input type = "button" value = "0" class = "width"onclick = "document.calculator.ans.value += '0'">
						<input type = "button" class = "fix" value = "." onclick = "document.calculator.ans.value += '.'">
						<input type = "button" class = "fix" value = "=" onclick = "document.calculator.ans.value = eval(document.calculator.ans.value)">
						<br />	
						<i class = "right">
							By Wajid Arbab
						</i>
					</td>
				</table>
			</tr>
		</form>
	</body>
</html>