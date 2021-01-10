<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>
    <link rel="shortcut icon" href="#">

</head>
<body>
    
        <div id="app">
        <button v-for="x in 6" @click="update(x)">{{x}}</button>
            <div class="container">
                
                <div v-for="dischi in database" class="blocks">
                <img :src="dischi.poster" alt="">
                <h1>{{dischi.title}}</h1>
                <p>{{dischi.author}}</p>
                <p>{{dischi.year}}</p>
            
            </div>
        </div>
    </div>




    <script src="script.js"></script>
</body>
</html>