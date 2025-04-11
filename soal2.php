<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>Soal no. 2 </title>
</head>

<body>
    <div class="hasil" style="display: none; border: 1px solid black; padding: 10px;"></div>
    <?php
    $label = ['Nama Anda : ', 'Umur Anda : ', 'Hobi Anda : '];
    $name = ['nama', 'umur', 'hobi'];
    ?>
    <?php
    $method = '';
    for ($i = 0; $i < 3; $i++) {

        if ($i == 2) {
            $method = 'POST';
        }
        // var_dump($name[$i]);
    ?>
        <form id="<?= $i ?>" method="<?= $method ?>" action="" style="display: flex; flex-direction: column; width: 300px; border: 1px solid black; padding: 8px; display: flex;gap: 30px;">
            <div>
                <label style=" margin-bottom: 6px;" for="nama"><?= $label[$i] ?>
                </label>
                <input type="text" id="nama" name="<?= $name[$i] ?>" placeholder="">
            </div>
            <input type="submit" style="width: fit-content; margin-left: 20px">
        </form>
    <?php
    }
    ?>
</body>


<script>
    const formulir = [0, 1, 2];
    const values = [];
    const name = ['Nama', 'Umur', 'Hobi'];

    formulir.forEach((id) => {
        $(`#${1}`).hide();
        $(`#${2}`).hide();
        $(`#${id}`).on('submit', function(e) {
            e.preventDefault();
            $ambilNilai = $(this).find('input').val();
            values.push($ambilNilai);
            formulir.forEach(id => $(`#${id}`).hide());
            if (id < 2) {
                $(`#${id+1}`).fadeIn();
            }
            if (id == 2) {
                values.forEach((val, i) => {
                    const hasil = $('<div>', {
                        text: name[i] + ' : ' + val
                    });
                    $('.hasil').css('display', 'inline-block');
                    $('.hasil').append(hasil);
                })

            }
            // console.log('values : ', values);
        })
    })
</script>

</html>