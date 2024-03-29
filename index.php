<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet">
    <title>Crud com PHP simples</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card rounded-3">
                        <div class="card-body p-4">

                            <h4 class="text-center my-3 pb-3">Lista de Tarefas com PHP 8</h4>

                            <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
                                <div class="col-12">
                                    <div class="form-outline">
                                        <input type="text" id="form1" class="form-control" />
                                        <label class="form-label" for="form1">Escreva uma tarefa....</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>

                            

                            <table class="table mb-4">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Todo item</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Buy groceries for next week</td>
                                        <td>In progress</td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            <button type="submit" class="btn btn-success ms-1">Finished</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Renew car insurance</td>
                                        <td>In progress</td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            <button type="submit" class="btn btn-success ms-1">Finished</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Sign up for online course</td>
                                        <td>In progress</td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            <button type="submit" class="btn btn-success ms-1">Finished</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>