
        <style>
        table {
        border: 1px solid #ccc;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        width: 100%;
        table-layout: fixed;
        }

        table caption {
        font-size: 1.5em;
        margin: .5em 0 .75em;
        }

        table tr {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        padding: .35em;
        }

        table th,
        table td {
        padding: .625em;
        text-align: center;
        }

        table th {
        font-size: .85em;
        letter-spacing: .1em;
        text-transform: uppercase;
        }

        /* @media screen and (min-width: 320px) {
       
        
        } */
  
        @media screen and (max-width: 600px) {
        table {
            border: 1px solid #ccc;
        }

        table caption {
            font-size: 1.3em;
        }
        
        table thead {
            border: none;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }
        
        table tr {
            border-bottom: 3px solid #ddd;
            display: block;
            margin-bottom: .625em;
        }
        
        table td {
            border-bottom: 1px solid #ddd;
            display: block;
            font-size: .8em;
            text-align: right;
        }
        
        table td::before {
            content: attr(data-label);
            float: left;
            font-weight: bold;
            text-transform: uppercase;
        }
        
        table td:last-child {
            border-bottom: 0;
        }
        }
        /* general styling */
        body {
        font-family: "Open Sans", sans-serif;
        line-height: 1.25;
        }
        </style>

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Register List</h2>
                            <p>Home<span>/<span>Register List</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <div class="row">
        <div class="col-lg-12 mb-5 mb-lg-0">
            <div class="blog_left_sidebar">
                <article class="blog_item">
                    <div class="blog_details">
                        <table style="margin: 50px 0px 50px 0px;">
                            <thead>
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0; if($user): ?>
                                    <?php foreach($user as $cust): ?>
                                <tr>
                                <!-- <th><//?php echo ++$i; ?></th> -->
                                <td data-label="Id"><?php if($cust['id']) { echo $cust['id']; }  else { ""; } ?></td>
                                <!-- <td data-label="Id"><//?php echo ++$i; ?></td> -->
                                <td data-label="Full Name"><?php echo $cust['fullName']; ?></td>
                                <td data-label="Address"><?php  echo $cust['address']; ?></td>
                                <td data-label="Email"><?php  echo $cust['email'];  ?></td>
                                <td data-label="Phone"><?php echo $cust['phone']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </article>
            </div>
        </div>
    </div>
        
    