<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toronto Blue Jays</title>
    <link rel="stylesheet" href="jays.css">
</head>
<body>

<h1>Toronto Blue Jays Baseball</h1>
<img src="/php-assignment1/images/toronto.jpg" alt="Blue Jays Logo" width="150">
<p>Welcome to the official Blue Jays players. Check out their stats below!</p>

<table id="playersTable">
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Batting Avg</th>
            <th>Home Runs</th>
            <th>RBI</th>
            <th>Birth Date</th>
        </tr>
    </thead>
    <tbody>
    <!-- Player data will be inserted here!! -->
    </tbody>
</table>

<script>
document.addEventListener("DOMContentLoaded", function() {
    fetch("players.php")
        .then(response => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then(data => {
            let tableBody = document.querySelector("#playersTable tbody");
            tableBody.innerHTML = "";
            data.forEach(player => {
                let row = `<tr>
                    <td>${player.name}</td>
                    <td>${player.position}</td>
                    <td>${player.batting_avg}</td>
                    <td class="${player.home_runs > 30 ? 'highlight' : ''}">${player.home_runs}</td>
                    <td>${player.rbi}</td>
                    <td>${new Date(player.birth_date).toLocaleDateString()}</td>
                </tr>`;
                tableBody.innerHTML += row;
            });
        })
        .catch(error => console.error("Error fetching players:", error));
});
</script>

</body>
</html>
