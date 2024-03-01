<?php
$sql = "SELECT catid, name FROM categories";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<select name='category'>";
    while($row = $result->fetch_assoc()) {
        echo "<option value='".$row["catid"]."'>".$row["name"]."</option>";
    }
    echo "</select>";
} else {
    echo "0 results";
}
?>
