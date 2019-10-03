<?php
$customer_list = [
    "0" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/08/20", "address" => "Hà Nội", "images" => "images/img1.png"),
    "1" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/08/21", "address" => "Bắc Giang", "images" => "images/img2.png"),
    "2" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/08/22", "address" => "Nam Định", "images" => "images/img3.png"),
    "3" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hà Tây", "images" => "images/img4.png"),
    "4" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/08/19", "address" => "Hà Nội", "images" => "images/img5.png")
];

function searchByDate($customers, $fromDate, $toDate)
{
    if (empty($fromDate) && empty($toDate)) {
        return $customers;
    }
    $filtered_customer = [];
    foreach ($customers as $customer) {
        if (!empty($fromDate) && (strtotime($customer['day_of_birth']) < strtotime($fromDate))) {
            continue;
        }
        if (!empty($toDate) && (strtotime($customer['day_of_birth']) > strtotime($toDate))) {
            continue;
        }
        $filtered_customer[] = $customer;
    }
    return $filtered_customer;
}

$fromDate = NULL;
$toDate = NULL;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fromDate = $_POST['from'];
    $toDate = $_POST['to'];
}
$filtered_customer = searchByDate($customer_list, $fromDate, $toDate);
?>

<?php foreach ($filtered_customer as $index => $customer): ?>
    <tr>
    <td><?php echo $index + 1 ?></td>
    <td><?php echo $customer['name'] ?></td>
    <td><?php echo $customer['day_of_birth'] ?></td>
    <td><?php echo $customer['address'] ?></td>
    <td>
        <div class="profile"><img src=<?php echo $customer['images'] ?> width="50" height="50"></div>
    </td>
    </tr>
<?php endforeach; ?>