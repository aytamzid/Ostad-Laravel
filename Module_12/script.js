const calculateBMI = (event) => {
    event.preventDefault();
    const weight = parseFloat(document.getElementById('weightInput').value);
    const height = parseFloat(document.getElementById('heightInput').value) / 100;
    const bmi = weight / (height * height);
    document.getElementById('result').innerHTML = `Your BMI is: ${bmi.toFixed(2)}`;

    if(bmi < 18.5){
        category = "Underweight 😒";
        result.style.color = "#ffc44d";
    }
    else if( bmi >= 18.5 && bmi <= 24.9 ){
        category = "Normal Weight 😍";
        result.style.color = "#0be881";
    }
    else if( bmi >= 25 && bmi <= 29.9 ){
        category = "Overweight 😮";
        result.style.color = "#ff884d";
    }
    else{
        category = "Obese 😱";
        result.style.color = "#ff5e57";
    }
    document.getElementById("category").innerHTML = category;
};

document.getElementById('calculateBtn').addEventListener('click', calculateBMI);