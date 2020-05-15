<html>
    <head>
        <title>Informasi Gaji Employee</title>
    </head>

    <body>
    <fieldset>
        <form action="gaji employee.php" method="post">
            <legend><h1>Informasi Gaji Employee</h1></legend>
            <p>
                Nama    : <br>
                <input type="text" name="nama" witdth="75" placeholder="Isi dengan nama anda" requied>
            </p>

            <p>
                Perusahaan-Pekerjaan Sebagai   : <br>
                <label>
                <input type="radio" id="Unileper-ScrumMaster" value="Unileper-ScrumMaster" name="Title" requied
                >Unileper-Scrum master</label>
                <label>
                <input type="radio" id="Unileper-sqa" value="Unileper-sqa" name="Title" requied
                >Unileper-SQA</label>
                <label>
                <input type="radio" id="Unileper-productOwner" value="Unileper-productOwner" name="Title" requied
                >Unileper-Product Owner</label>
                </p>
            <p>
                <label>
                <input type="radio" id="munlay-ScrumMaster" value="munlay-ScrumMaster" name="Title" requied
                >Munlay-Scrum master</label>
                <label>
                <input type="radio" id="munlay-sqa" value="munlay-sqa" name="Title" requied
                >Munlay-SQA</label>
                <label>
                <input type="radio" id="munlay-productOwner" value="munlay-productOwner" name="Title" requied
                >Munlay-Product Owner</label>
                </p>
            <p>
                <label>
                <input type="radio" id="indoreni-ScrumMaster" value="indoreni-ScrumMaster" name="Title" requied
                >Indoreni-Scrum master</label>
                <label>
                <input type="radio" id="indoreni-sqa" value="indoreni-sqa" name="Title" requied
                >Indoreni-SQA</label>
                <label>
                <input type="radio" id="indoreni-productOwner" value="indoreni-productOwner" name="Title" requied
                >Indoreni-Product Owner</label>
            </p>

            <p>
                <input type="submit" value="Cari" name="submit">
            </p>
    </fieldset>
    </body>
</html>
