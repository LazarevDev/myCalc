document.getElementById("monthInput").addEventListener("change", function() {

    var e = document.getElementById("monthInput");
    var selectedValue = e.options[e.selectedIndex].text;

    document.getElementById("month").innerText = selectedValue;
});

document.getElementById("typeInput").addEventListener("change", function() {
    var e = document.getElementById("typeInput");
    var selectedValue = e.options[e.selectedIndex].text;

    document.getElementById("type").innerText = selectedValue;
});

document.getElementById("tonnageInput").addEventListener("change", function() {
    var e = document.getElementById("tonnageInput");
    var selectedValue = e.options[e.selectedIndex].text;

    document.getElementById("tonnage").innerText = selectedValue;
});