<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    
    <h1>Отправка данных на сервер</h1>
    <h2>Еще о формах</h2>
    <hr>
    <h2>Редактируем данные пользователя</h2>

    <?php
        require "user.php";

        $user_lang = explode(", ", $user['lang']);
        
        $user_interes = explode(", ", $user['interes']);
        
        $courses = [
            'java' => 'Разработчик игр на Java',
            'php' => 'Программирование на PHP',
            'python' => 'Занимательный Python',
            'perl' => 'Язык программирования Perl за 24 часа',
            'javascript' => 'Javascript в примерах'
        ];
        
        $forms = [
            'очное' => 'очное',
            'очно-заочное' => 'очно-заочное',
            'заочное' => 'заочное',
            'дистанционное' => 'дистанционное'
        ];
        
        $directions = [
            'Веб и интернет-технологии',
            'Разработка программ для компьютеров и смартфонов',
            'Программирование роботов и умных устройств',
            'Искусственный интеллект и машинное обучение',
            'Инфраструктура — сети, серверы, администрирование'
        ];
    ?>

    <form action="example_8.php" method="post">
        Имя: <input type="text" name="name" value="<?= $user['name']; ?>"><p>
        E-mail: <input type="email" name="email" value="<?= $user['email']; ?>"><p>
    
        <h3>Выберите интересующий вас курс:</h3>
        <?php foreach ($courses as $value => $label): ?>
            <input type="checkbox" name="lang[]" value="<?= $value; ?>" 
                <?= in_array($value, $user_lang) ? 'checked' : ''; ?>>
            <?= $label; ?><br />
        <?php endforeach; ?>
        
        <h3>Выберите форму обучения:</h3>
        <?php foreach ($forms as $value => $label): ?>
            <input type="radio" name="form" value="<?= $value; ?>" 
                <?= ($user['form'] == $value) ? 'checked' : ''; ?>>
            <?= $label; ?><br />
        <?php endforeach; ?>  
        
        <h3>Какие направления ИТ вас могли бы заинтересовать:</h3>
        <select name="interes[]" size="5" multiple>
            <?php foreach ($directions as $direction): ?>
                <option value="<?= $direction; ?>" 
                    <?= in_array($direction, $user_interes) ? 'selected' : ''; ?>>
                    <?= $direction; ?>
                </option>
            <?php endforeach; ?>
        </select><p>

        <input type="submit" name="submit" value="Сохранить">
    </form>

</body>
</html>