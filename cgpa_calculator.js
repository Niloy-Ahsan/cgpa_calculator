// Wait for the DOM to load
document.addEventListener('DOMContentLoaded', function () {
    // Get the form and result elements
    var form = document.querySelector('form');
    var resultBox = document.getElementById('resultBox');
    var resultText = document.getElementById('resultText');

    // Add a click event listener to the Calculate button
    document.getElementById('calculateButton').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent form submission

        // Get the form input values
        var cdcom = parseInt(document.getElementById('cdcom').value);
        var oldcgpa = parseFloat(document.getElementById('oldcgpa').value);
        var c1_gpa = parseFloat(document.getElementById('c1_gpa').value);
        var c2_gpa = parseFloat(document.getElementById('c2_gpa').value);
        var c3_gpa = parseFloat(document.getElementById('c3_gpa').value);
        var c4_gpa = parseFloat(document.getElementById('c4_gpa').value);

        // Perform the CGPA calculation
        var lastsempoints = cdcom * oldcgpa;

        var c1_credit = 3;
        var c2_credit = 3;
        var c3_credit = 3;
        var c4_credit = 3;

        var p1 = c1_credit * c1_gpa;
        var p2 = c2_credit * c2_gpa;
        var p3 = c3_credit * c3_gpa;
        var p4 = c4_credit * c4_gpa;

        var recentpoints = p1 + p2 + p3 + p4;

        var res = lastsempoints + recentpoints;
        var newcd = c1_credit + c2_credit + c3_credit + c4_credit;

        var FINAL = res / (cdcom + newcd);
        var CGPA = Math.round(FINAL * 100) / 100; // Round to 2 decimal places

        // Display the CGPA result
        resultText.textContent = 'Your CGPA is ' + CGPA;
        resultBox.style.display = 'block';
    });
});
