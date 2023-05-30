<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        if(isset($_POST)){
            

            header("Location: .php");
        }
    
    ?>
    <form action="">
        <label for="DietName">食譜名稱:</label>
        <input name="DietName" type="text">
        <br/>
        <label for="PeopleCounts">份數:</label>
        <input name="PeopleCounts" type="number">
        <br/>
        <label for="kcal">熱量:</label>
        <input name="kcal" type="number">
        <br/>

        <div id="" class="Ingredients">
            <label for="kcal">熱量:</label>
            <p>London is the capital city of England.</p>
        </div>

        <label for="protein">蛋白:</label>
        <input name="protein" type="number">
        <br/>
        <label for="carb">碳水:</label>
        <input name="carb" type="number">
        <br/>
        <label for="fat">脂肪:</label>
        <input name="fat" type="number">
        <br/>
        <span>JS選單-可增加材料，包含 重量 名稱</span>
        <label for="StepMemo">料理方式:</label>
        <textarea name="StepMemo"></textarea>
        <br/>
        <button>新增</button>
    </form>
</body>
</html>