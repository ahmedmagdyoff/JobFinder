const display = document.getElementById("display");
const buttons = document.querySelectorAll(".btn");

let currentValue = "";

buttons.forEach(button => {
    button.addEventListener("click", () => {
        const value = button.textContent;

        if (value === "AC") {
            currentValue = "";
            display.value = "";
        }
        else if (value === "⌫") {
            currentValue = currentValue.slice(0, -1);
            display.value = currentValue;
        }
        else if (value === "=") {
            try {
                currentValue = currentValue
                    .replace("×", "*")
                    .replace("÷", "/")
                    .replace("−", "-");
                currentValue = eval(currentValue).toString();
                display.value = currentValue;
            } catch {
                display.value = "Error";
                currentValue = "";
            }
        }
        else {
            currentValue += value;
            display.value = currentValue;
        }
    });
});