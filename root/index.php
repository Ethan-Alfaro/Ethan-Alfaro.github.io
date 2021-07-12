<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethan Web Site</title>
    <link rel="stylesheet" href="./src/styles/header.css" />
    <link rel="stylesheet" href="./src/styles/contact.css" />
    <link rel="stylesheet" href="./src/styles/skills.css" />
    <link rel="stylesheet" href="./src/styles/projects.css" />
    <link rel="stylesheet" href="./src/styles/rootStyles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4a3f5f7e99.js" crossorigin="anonymous"> </script>
</head>

<body>
    <div id="header">
        <div id="presentation" class='d-flex justify-content-center flex-column align-items-center text-center'>
            <h1>Ethan Alfaro Figueira</h1>
            <hr id="separator" />
            <h2>Full Stack Developer</h2>
            <div id="connect">
                <a href="" class='icons'><i class="fab fa-github"></i> </a>
                <a href="" class='icons'><i class="fab fa-linkedin"></i></a>
                <a href="" class='icons'><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12 col-md-6 h-100">
                <div class="col-12 text-center d-flex justify-content-center flex-column align-items-center">
                    <h1 class="text-secondary">Skills</h1>
                    <hr id="separator2" />
                </div>

                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col col-md-4 sm-12 skillsIcons"><img src="./src/img/css.png" style="height:50px;" style="width:50px;" /></div>
                    <div class="col col-md-4 sm-12 skillsIcons"><img src="./src/img/html-5.png" style="height:50px;" style="width:50px;" /></div>
                    <div class="col col-md-4 sm-12 skillsIcons"><img src="./src/img/java-script.png" style="height:50px;" style="width:50px;" /></div>
                    <div class="col col-md-4 sm-12 skillsIcons"><img src="./src/img/php.png" style="height:50px;" style="width:50px;" /></div>
                    <div class="col col-md-4 sm-12 skillsIcons"><img src="./src/img/physics.png" style="height:50px;" style="width:50px;" /></div>
                    <div class="col col-md-4 sm-12 skillsIcons"><img src="./src/img/sass.png" style="height:50px;" style="width:50px;" /></div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 ">
                <div class="col-12 text-center d-flex justify-content-center flex-column align-items-center">
                    <h1 class="text-secondary">Contact</h1>
                    <hr id="separator2" />
                </div>

                <div class="row d-flex justify-content-center align-items-center">
                    <form action="" id="contactForm">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <hr id='separator3'>
                        <div class="form-group">
                            <label for="comment">Comment</label>
                            <input type="text" class="form-control" id="comment" placeholder="Put hear our comment">
                        </div>
                        <hr id='separator3'>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div id="projects" class='row mt-5'>
        <?php
        $projectsJSON = file_get_contents('./src/BD/projects.json');
        $projects = json_decode($projectsJSON, true);
        foreach ($projects as $project) {
            echo '<div class="col-md-4 sm-12">';
            echo '<div class="projectCard">';
            echo ' <div class="projectName">';
            echo '<h3>' . $project['title'] . '</h3>';
            echo ' </div>';
            echo ' <div class="projectDemo">';
            echo '<img class="projectGif" src=' . $project['gif'] . ' />';
            echo '</div>';
            echo ' <div class="projectFooter">';
            echo '<p>' . $project['technologies'] . '</p>';
            echo '</div>';
            echo ' </div>';
            echo '</div>';
        }


        ?>



    </div>

</body>

</html>