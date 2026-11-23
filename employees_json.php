<?php
$jsonFile = __DIR__ . "/employees.json";
$employees = [];

if (file_exists($jsonFile)) {
    $raw = file_get_contents($jsonFile);
    $decoded = json_decode($raw, true);
    if (is_array($decoded)) {
        $employees = $decoded;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Employee Directory (JSON)</title>
<style>
body { font-family: Arial, sans-serif; margin: 24px; }
table { border-collapse: collapse; width: 100%; max-width: 800px; }
th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
th { background-color: #f4f4f4; }
</style>
</head>
<body>
<h2>Employee Information (From JSON)</h2>
<?php if (!empty($employees)): ?>
<table>
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Department</th>
<th>Salary</th>
</tr>
</thead>
<tbody>
<?php foreach ($employees as $emp): ?>
<tr>
<td><?php echo htmlspecialchars((string)($emp["id"] ?? "")); ?></td>
<td><?php echo htmlspecialchars((string)($emp["name"] ?? "")); ?></td>
<td><?php echo htmlspecialchars((string)($emp["email"] ?? "")); ?></td>
<td><?php echo htmlspecialchars((string)($emp["department"] ?? "")); ?></td>
<td><?php echo htmlspecialchars(number_format((float)($emp["salary"] ?? 0), 2)); ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<?php else: ?>
<p>No employee records found.</p>
<?php endif; ?>
</body>
</html>