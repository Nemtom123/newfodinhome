<?php
print_r($_POST);
try {
    if (
        !isset($_FILES['file']['error']) ||
        is_array($_FILES['file']['error'])
    ) {
        throw new RuntimeException('Invalid parameters.');
    }

    switch ($_FILES['file']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }

    $temp = explode(".", $_FILES["file"]["name"]);

    $newfilename = str_replace(" ", "", basename($_FILES["file"]["name"]));
    move_uploaded_file($_FILES["file"]["tmp_name"], '../images/oldal7/' . $newfilename);

} catch (RuntimeException $e) {
// Something went wrong, send the err message as JSON
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
