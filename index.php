<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>Admin Area | Dashboard</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="starter-template.css" rel="stylesheet">
        <link href="open-iconic/font/css/open-iconic.css" rel="stylesheet">
        <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>

    </head>

    <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
            <a class="navbar-brand" href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href=index.html>Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages.php">Pages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="posts.php">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="users.php">Users</a>
                    </li>

                </ul>

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href=index.php>Welcome, Anu </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Logout</a>


                </ul>


            </div>
        </nav>

        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1>Dashboard <small>Manage your Site</small></h1>
                    </div>
                    <div class="col-md-2">
                        <div class="dropdown create">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Create Content
                                <span class="caret"></span>
                            </button>

                            <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                 <li><a type="button" data-toggle="modal" data-target="#addpage">Add page</a></li>
                                 <li>Add Post</li>
                                 <li>Add User</li>
                             </ul> -->

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" data-toggle="modal" data-target="#addpage">Add Page</a>
                                <a class="dropdown-item" href="#">Add Post</a>
                                <a class="dropdown-item" href="#">Add User</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>

        <section id="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </section>

        <section id="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="list-group">
                            <a href="index.php" class="list-group-item list-group-item-action active"><span class="oi" data-glyph="wrench" title="icon name" aria-hidden="true"></span> Dashboard</a>
                            <a href="pages.php" class="list-group-item list-group-item-action"><span class="oi" data-glyph="book" title="icon name" aria-hidden="true"></span> Pages <span class="badge">13</span></a>
                            <a href="posts.php" class="list-group-item list-group-item-action"><span class="oi" data-glyph="pencil" title="icon name" aria-hidden="true"></span> Posts <span class="badge">25</span></a>
                            <a href="users.php" class="list-group-item list-group-item-action"><span class="oi" data-glyph="person" title="icon name" aria-hidden="true"></span> User <span class="badge">05</span></a>
                        </div>
                        <br>
                        <div class="card card-body">
                            <h4>Disk Space Used</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                            </div> 
                            <br>
                            <h4>Bandwidth</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-9 ">
                        <div class="panel panel-default ">
                            <div class="panel-heading main-color">
                                <h3 class="panel-title"> Website Overview</h3>
                            </div>  

                            <div class="panel-body row">
                                <div class="col-md-3">
                                    <div class="card card-body dash-box">
                                        <h2><span class="oi" data-glyph="person" title="icon name" aria-hidden="true"></span> 203</h2>
                                        <h4>Users</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body dash-box">
                                        <h2><span class="oi" data-glyph="book" title="icon name" aria-hidden="true"></span> 20</h2>
                                        <h4>Pages</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body dash-box">
                                        <h2><span class="oi" data-glyph="pencil" title="icon name" aria-hidden="true"></span> 46</h2>
                                        <h4>posts</h4>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card card-body dash-box">
                                        <h2><span class="oi" data-glyph="vertical-align-bottom" title="icon name" aria-hidden="true"></span> 12,500</h2>
                                        <h4>Visitors</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="panel panel-default ">
                            <div class="panel-heading main-color">
                                <h3 class="panel-title"> Latest Users</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-hover">

                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Joined</th>
                                    </tr>

                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>12 Dec 2016</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>15 Feb 2016</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>12 Jan 2016</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>



        <div class="modal fade" id="addpage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Page</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Page Title</label>
                                <input type="text" class="form-control" placeholder="Page Title">
                            </div>
                            <div class="form-group">
                                <label>Page Body</label>
                                <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Published
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Meta Tags</label>
                                <input type="text" class="form-control" placeholder="Add Some Tags..">
                            </div>   
                            <div class="form-group">
                                <label>Meta Description</label>
                                <input type="text" class="form-control" placeholder="Add Meta Description..">
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer id="footer">
            <p>Copyright Admin, &COPY; 2017</p>
        </footer>



        <script>
            CKEDITOR.replace('editor1');
        </script>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
