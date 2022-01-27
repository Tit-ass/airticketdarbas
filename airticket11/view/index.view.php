<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>airticket</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){  
            if($_POST['bagazas'] === '20+') (int)$_POST['kaina'] += 30;
    }
    ?>
    <div class="container" class="text-align">
        <h1 class="">AirTicket</h1>

    <form method="POST">
        
        <div class="mb-3">
        <label for="skrydzioNr" class="form-label">Skrydžio numeris</label>
            <select class="form-select" id='skrydzioNr'
            name='skrydzioNr'
            >
                <option selected disabled value="">Select</option>
                <?php foreach ($skrydzioRandNr as $skrydzioNr): ?>
                <option value=<?=$skrydzioNr?>><?=$skrydzioNr?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="kodas" class="form-label">Asmens Kodas</label>
            <input type="number" class="form-control"
            name='kodas'
            required
            id="kodas">
        </div>
        <div class="mb-3">
            <label for="vardas" class="form-label">Vardas</label>
            <input type="text" class="form-control"
            name='vardas'
            required
            id="vardas">
        </div>
        <div class="mb-3">
            <label for="pavarde" class="form-label">Pavardė</label>
            <input type="text" class="form-control"
            name='pavarde'
            required
            id="pavarde">
        </div>
        <div class="mb-3">
        <label for="iskurskrenda" class="form-label">Iš kur skrenda</label>
            <select class="form-select" id='iskurskrenda'
            name='iskurskrenda'
            
            required
            >
                <option selected disabled value="">Select</option>
                <?php foreach ($countries as $country): ?>
                <option value="<?=$country?>"><?=$country?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
        <label for="ikurskrenda" class="form-label">Į kur skrenda</label>
            <select class="form-select" id='ikurskrenda'
            name='ikurskrenda'
            required
            >
                <option selected disabled value="">Select</option>
                <?php foreach ($countries as $country): ?>
                <option value="<?=$country?>"><?=$country?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="kaina" class="form-label">Kaina &euro;</label>
            <input type="number" class="form-control"
            name='kaina'
            required
            id="kaina">
        </div>
        <div class="mb-3">
            <label for="bagazas" class="form-label">Bagažas(kg)</label>
            <select class="form-select" id='bagazas'
            name='bagazas'
            required
            >
                <option selected disabled value="">select</option>
                <?php foreach ($bagazas as $luggage): ?>
                <option value="<?=$luggage?>"><?=$luggage?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="pastabos" class="form-label">Pastabos</label>
            <textarea class="form-control" placeholder="Leave a comment here" id="pastabos" name='pastabos'></textarea>

        </div>
        <button type="submit" name='submit' class="btn btn-dark">Pateikti</button>
    </form>



    <?php if(isset($_POST['submit'])):?>
        <?php if($_POST['iskurskrenda'] !== $_POST['ikurskrenda']):?>
            <table class="table mt-5">
                <thead class="thead-dark">
                        <tr>
                        <?php foreach ($_POST as $key =>$data): ?>
                            <?php if($key !== 'submit'):?>
                                <th scope="col"><?=$key?></th>
                            <?php endif?>
                        <?php endforeach ?>
                        </tr>
                </thead>
                <tbody>
                
                    <tr>
                    <?php foreach ($_POST as $key =>$data): ?>
                        <?php if($key !== 'submit'):?>
                            <td scope="col"><?=$data?></td>
                        <?php endif?>
                    <?php endforeach ?>
                    </tr>
                
                </tbody>
        </table>

        
        <?php else: ?>
            <h2>Iš kur skrenda ir į kur skrenda negali būti toki patys!</h2>
        <?php endif?>
<?php endif?>
    </div>


</body>
</html>
