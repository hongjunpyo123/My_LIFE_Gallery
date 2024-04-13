<!DOCTYPE html>
<html>
    <head>
        <title>MY PHOTO Gallery</title>
        <meta charset="utf-8">
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.body.style.zoom = '25%';
                window.scrollTo(0, 0);
            });
        </script>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body{
                position: relative;
                margin: 0 auto;
                height: 10000px;
                width: auto;
                min-width: 5300px;
                min-height: 3636px;
                background-color: antiquewhite;
                background-repeat: repeat-y;
                background-image: url(pic/wood2.jpg);
                background-size: 100%;
            }
            #bar{
                position: fixed;
                top: -1%;
                text-align: center;
                z-index: 2;
                width: 100%;
                height: 350px;
                bottom: 90%;
                min-width: 3836px;
                background-color: rgba(100%, 100%, 100%, 0%);
            }
            #bar:hover #bar_1{
                transition: background-color 0.5s ease;
                background-color: rgba(100%, 100%, 100%, 100%);
                color: black;
                border-radius: 10px;
            }
            #bar:hover #bar_2{
                transition: background-color 0.5s ease;
                color: black;
                border-radius: 10px;
            }
            #bar:hover #bar_3{
                transition: background-color 0.5s ease;
                color: black;
                border-radius: 10px;
            }
            #bar_1:hover{
                text-decoration: underline;
                text-underline-position: under;
            }
            #bar_2:hover{
                text-decoration: underline;
                text-underline-position: under;
            }
            #bar_3:hover{
                text-decoration: underline;
                text-underline-position: under;
            }
            a{
                text-decoration: none;
            }
            #bar_1{
                transition: background-color 0.3s ease;
                text-align: center;
                color: white;
                font-size: 110px;
                font-family: Georgia;
                font-weight: 100;
                height: 450px;
                line-height: 450px;
            }
            #bar_2{
                position: absolute;
                transition: background-color 0.3s ease;
                text-align: center;
                color: white;
                font-size: 110px;
                font-family: Georgia;
                font-weight: 100;
                height: 450px;
                line-height: 450px;
                background-color: rgba(100%, 100%, 100%, 0%);
                top: 0%;
                left: 24%;
            }
            #bar_3{
                position: absolute;
                transition: background-color 0.3s ease;
                text-align: center;
                color: white;
                font-size: 110px;
                font-family: Georgia;
                font-weight: 100;
                height: 450px;
                line-height: 450px;
                background-color: rgba(100%, 100%, 100%, 0%);
                top: 0%;
                left: 90%;
            }
            table{
                position: relative;
                top: 5%;
                left: 50%;
                width: 25%;
                transform: translate(-50%, 0%);
            }
            img{
                width: 1000px;
                height: auto;
                margin: 100px 130px 100px 130px;
                padding: 0 0 0 0px;
                border-radius: 30px;
                border: 61px solid white;
            }
            img:hover{
                transition: box-shadow 0.5s ease;
                transition: border 0.3s ease;
                box-shadow: 18px 18px gray;
                border: 75px solid greenyellow;
            }

        </style>
    </head>
    <body>
        <div id="bar">
            <a href="intro.html"><h1 id="bar_1">. MY LIFE Blog .</h1></a>
            <a href="photos.php"><p id="bar_2">photos</p></a>
            <a href="login.html"><p id="bar_3">logout</p></a>
        </div>
            <?php
                $photos = ["travel1.jpg", "travel2.jpg", "travel3.jpg", "travel4.jpg",
                "travel5.jpg", "travel6.jpg", "travel7.jpg", "travel8.jpg", "travel9_1.jpg",
                "travel11.jpg", "travel12.jpg", "travel13.jpg", "travel14.jpg", "travel15.jpg",
                "travel16.jpg", "travel17.jpg", "travel18.jpg", "travel19.jpg", "travel20.jpg",
                "food1.jpg", "food2.jpg", "food3.jpg", "food4.jpg",
                "food5.jpg", "food6.jpg", "food7.jpg", "food8.jpg", "food9.jpg",
                "food10.jpg", "food11.jpg", "food12.jpg"];
                $title = ["서울의 숲", "서울의 숲", "서울의 숲", "서울의 숲", 
                "서울의 숲", "강원도 캠핑장", "방직공장 카페", "노원 카페", "서울숲 나무들", "노원 감성카페",
                "신세계 백화점 본점", "서울의 숲(가을)", "서울의 숲", "서울의 숲", "서울의 숲",
                "대진대학교 풍경", "서울의 숲", "서울의 숲", "방직공장 카페", "노원 먹거리", "노원 어글리스토브", "스타벅스",
                "노원 투섬플레이스", "노원 감성카페2", "노원 회전초밥집", "노원 먹거리", "뷔페 식사 후 디저트", 
                "강남 파스타", "스타벅스", "노원 먹거리", "뷔페"];
            ?>
            <table>
                <?php
                    for($i = 0; $i < count($photos); $i++){
                        if($i % 4 == 0 || $i == 0){
                            echo "<tr>";
                        }
                            ?>
                                <td><a href="pic/<?=$photos[$i]?>"><img src="pic/<?=$photos[$i]?>" title="<?=$title[$i]?>"></a></td>
                            <?php
                        if(($i+1) % 4 == 0){
                            echo "</tr>";
                        }

                    }
                ?>
            </table>
    </body>
</html>