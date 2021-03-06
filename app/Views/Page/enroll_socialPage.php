<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepare Your Future - HAiYU</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <!--Bootstrap css URL-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleSocial.css">
    <link rel="shortcut icon" href="../images/favicon.ico" />

</head>

<body>
    <main>
        <div class="Isi">
            <div class="row" id="backRow">
                <a id="backButton" href="/user/subject">&#8678</a>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 column">
                    <div class="cardEconomics">
                        <img src="../images/edu/036-chart.png" alt="social" id="icon" onclick="location.href = '/social/economics'">
                        <h3 id="titleSub">Economics</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 column">
                    <div class="titlePage">
                        <h1 id="title">EXPLORE<br>
                            YOUR<br>
                            SOCIAL<br>
                            HARDSKILL
                        </h1>
                    </div>
                </div>
                <div class="col-6 col-md-4 column">
                    <div class="cardHistory">
                        <img src="../images/edu/003-university.png" alt="social" id="icon" onclick="location.href = '/social/history'">
                        <h3 id="titleSub">History</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 column">
                    <div class="cardGeography">
                        <img src="../images/edu/050-globe.png" alt="social" id="icon" onclick="location.href = '/social/geography'">
                        <h3 id="titleSub">Geography</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 column" style="visibility: hidden;">
                    <div class="cardLanguage">
                        <img src="../images/edu/013-conversation.png" alt="social" id="icon" onclick="location.href = '/language'">
                        <h3 id="titleSub">Language</h3>
                    </div>
                </div>
                <div class="col-6 col-md-4 column">
                    <div class="cardSociology">
                        <img src="../images/edu/043-qa.png" alt="social" id="icon" onclick="location.href = '/social/sociology'">
                        <h3 id="titleSub">Sociology</h3>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h1>Do you want to enroll
                    <br>
                    <?= $title ?> ? </h1>
            </div>

            <div>
                <form action="/subject/enroll" method="POST">
                    <input type="hidden" name="id_mapel" value="<?= $id ?>">
                    <input type="hidden" id="page" name="page" value="/subject/social">

                    <button type="submit" name="submit" value="yes">YES</button>
                    <button type="button" name="close" value="no" onclick="location.href = '/subject/social'">NO</button>
                    <br>
                </form>
            </div>
        </div>

    </div>

    <h6>?? HAiYU Developer Team. All Rights Reserved</h6>
</body>

</html>