

function calculateBMI(heightCm, weight) {
    var heightM = heightCm / 100;
    return weight / (heightM * heightM);
}

function redirectToDietChart(age, height, weight) {
    var bmi = calculateBMI(height, weight);
    var category = "";
    var redirectUrl = "";

    if (age >= 1 && age <= 3) {
        if (bmi < 14) {
            category = "Underweight";
            redirectUrl = "s1.html";
        } else if (bmi >= 14 && bmi <= 17) {
            category = "Normal weight";
            redirectUrl = "n1.html";
        } else if (bmi > 17) {
            category = "Overweight";
            redirectUrl = "o1.html";
        }
    } else if (age >= 4 && age <= 6) {
        if (bmi < 14.5) {
            category = "Underweight";
            redirectUrl = "s2.html";
        } else if (bmi >= 14.5 && bmi <= 17.5) {
            category = "Normal weight";
            redirectUrl = "n2.html";
        } else if (bmi > 17.5) {
            category = "Overweight";
            redirectUrl = "o2.html";
        }
    } else if (age >= 7 && age <= 9) {
        if (bmi < 15) {
            category = "Underweight";
            redirectUrl = "s3.html";
        } else if (bmi >= 15 && bmi <= 18) {
            category = "Normal weight";
            redirectUrl = "n3.html";
        } else if (bmi > 18) {
            category = "Overweight";
            redirectUrl = "o3.html";
        }
    } else if (age >= 10 && age <= 12) {
        if (bmi < 16) {
            category = "Underweight";
            redirectUrl = "s4.html";
        } else if (bmi >= 16 && bmi <= 19) {
            category = "Normal weight";
            redirectUrl = "n4.html";
        } else if (bmi > 19) {
            category = "Overweight";
            redirectUrl = "o4.html";
        }
    } else if (age >= 13 && age <= 15) {
        if (bmi < 17) {
            category = "Underweight";
            redirectUrl = "s5.html";
        } else if (bmi >= 17 && bmi <= 22) {
            category = "Normal weight";
            redirectUrl = "n5.html";
        } else if (bmi > 22) {
            category = "Overweight";
            redirectUrl = "o5.html";
        }
    } else {
        alert("Age out of range. Please enter an age between 1 and 15.");
        return;
    }

    alert("Redirecting to your diet chart");
    window.location.href = redirectUrl;
}