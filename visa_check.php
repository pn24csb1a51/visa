<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $country = $_POST["country"] ?? "";

    $visaInfo = [
        "U" => "Visa required for most applicants.",
        "C" => "Visa required unless you have an eTA.",
        "I" => "Visa required before travel.",
        "UK" => "Visa depends on the duration of stay.",
        "AUS" => "eVisa available for eligible travelers."
    ];

    echo isset($visaInfo[$country]) ? $visaInfo[$country] : "<span style='color: red;'>Invalid country selection.</span>";
}
?>
