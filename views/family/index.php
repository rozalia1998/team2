<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin:20px 0;
        }
        table,th,td{
            border:1px solid black;
            text-align:center;
        }
        th,td{
            padding:5px;
        }
        button{
            display:inline-block;
            background-color:#bbb;
            padding:3px 10px;

        }
        #edit{
            background-color: #04AA6D;
        }
        #delete{
            background-color: #f44336;
        }
        a{
            text-decoration:none;
            font-size:18px;
            color:white;
        }
        #create,#show{
            color:black;
            margin-bottom:20px;
        }
    </style>
</head>
<body>
    <center>
    
        <button>
            <a id='search' href="<?= BASE_PATH.'Show/search'?>">Search</a>
        </button>
        <h1>All Families</h1>
        <?php 
        session_start();
        if ($_SESSION['user-type']=='employee') :?>
            <a id='create' href="<?= BASE_PATH.'Show/create' ?>">Create Family</a><br><br>
                   
        <?php endif?>
        <a id='show' href="<?= BASE_PATH.'plant/show' ?>">Show Plants</a>
        <table>
            <thead>
            <tr>
                <th cols="3">Full Name</th>
                <th>Num of members</th>
                <th>Phone</th>
                <th>State</th>
                <th>Area</th>
                <?php
                if ($_SESSION['user-type']=='employee') :?>
                <th cols="2">Actions</th>
                <?php endif?>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($families as $family):?>
                <tr>
                    <td cols="3"><?= $family->getFName() ?> <?= $family->getPName() ?> <?= $family->getLName() ?></td>
                    <td><?= $family->getCount() ?></td>
                    <td><?= $family->getPhone() ?></td>
                    <td><?= $family->getState() ?></td>
                    <td><?= $family->getArea() ?></td>
                    <?php
                    if ($_SESSION['user-type']=='employee') :?>
                    <td cols="2">
                        <button id="edit">
                            <a href="<?= BASE_PATH.'Show/edit/?id='.$family->getId() ?>">Edit</a>
                        </button>
                        <button id="delete">
                            <a href="<?= BASE_PATH.'Show/delete/?id='.$family->getId() ?>">Delete</a>
                        </button>
                        <button id="create">
                            <a href="<?= BASE_PATH.'plant/create/?fid='.$family->getId() ?>">create plant</a>
                        </button>
                    </td>
                    <?php endif ?>

                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
        <button>
            <a id='search' href="<?= BASE_PATH.'logout'?>">Logout</a>
        </button>
    </center>   
</body>
</html>

</body>
</html>