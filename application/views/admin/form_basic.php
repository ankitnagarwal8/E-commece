<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/ecommerce/Assets/Admin/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="http://localhost/ecommerce/Assets/Admin/css/style.css" rel="stylesheet">

</head>

<body>

<?php include('header.php'); ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Input Style</h4>
                                <p class="text-muted m-b-15 f-s-12">Use the input classes on an <code>.input-default, input-flat, .input-rounded</code> for Default input.</p>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-default" placeholder="Input Default">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-flat" placeholder="Input Flat ">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-rounded" placeholder="Input Rounded">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Textarea</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <label>Comment:</label>
                                            <textarea class="form-control h-150px" rows="6" id="comment"></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Checkboxes</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <div class="form-check mb-3">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="">Option 1</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="">Option 2</label>
                                            </div>
                                            <div class="form-check disabled">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="" disabled="disabled">Disabled</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Inline Checkboxes</h4>
                                <p class="text-muted">Use the <code>.form-check-inline</code> class if you want the checkboxes to appear on the same line</p>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="">Option 1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="">Option 2</label>
                                            </div>
                                            <div class="form-check form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="" disabled="disabled">Disabled</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Radio Buttons</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <div class="radio mb-3">
                                                <label>
                                                    <input type="radio" name="optradio">Option 1</label>
                                            </div>
                                            <div class="radio mb-3">
                                                <label>
                                                    <input type="radio" name="optradio">Option 2</label>
                                            </div>
                                            <div class="radio disabled">
                                                <label>
                                                    <input type="radio" name="optradio" disabled="disabled">Option 3</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Radio Inline</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="optradio"> Option 1</label>
                                            <label class="radio-inline mr-3">
                                                <input type="radio" name="optradio"> Option 2</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio"> Option 3</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Select List</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <label>Select list (select one):</label>
                                            <select class="form-control" id="sel1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Mutiple select list (hold shift to select more than one):</label>
                                            <select multiple="multiple" class="form-control" id="sel2">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bootstrap Input File</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <input type="file" class="form-control-file">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Input Size</h4>
                                <p class="text-muted">Set heights using classes like <code>.form-control-lg and .form-control-sm.</code>
                                </p>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Default input">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Select Size</h4>
                                <p class="text-muted">Set heights using classes like <code>.form-control-lg and .form-control-sm.</code>
                                </p>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <select class="form-control form-control-lg">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control form-control-sm">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Readonly</h4>
                                <p class="text-muted">Add the <code>readonly</code> boolean attribute on an input to prevent modification of the input’s value</p>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Readonly input here…" readonly="readonly">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Readonly</h4>
                                <p class="text-muted">use the <code>.form-control-plaintext</code> class to remove the default form field styling and preserve the correct margin and padding.</p>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" readonly="readonly" class="form-control-plaintext" value="email@example.com">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Inline Form</h4>
                                <p class="text-muted">use the <code>.form-inline</code> class to for inline form styles.</p>
                                <div class="basic-form">
                                    <form class="form-inline">
                                        <div class="form-group mb-2">
                                            <label class="sr-only">Email</label>
                                            <input type="text" readonly="readonly" class="form-control-plaintext" value="email@example.com">
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2">
                                            <label class="sr-only">Password</label>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-dark mb-2">Confirm identity</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form grid</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="First name">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Last name">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Row</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-row">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="First name">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Last name">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Vertical Form</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group">
                                            <label>Address 2</label>
                                            <input type="text" class="form-control" placeholder="Apartment, studio, or floor">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>City</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>State</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected="selected">Choose...</option>
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>Zip</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label">Check me out</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-dark">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Vertical Form</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <label class="col-form-label col-sm-2 pt-0">Radios</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked="checked">
                                                        <label class="form-check-label">First radio</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                                                        <label class="form-check-label">Second radio</label>
                                                    </div>
                                                    <div class="form-check disabled">
                                                        <input class="form-check-input" type="radio" name="gridRadios" value="option3" disabled="disabled">
                                                        <label class="form-check-label">Third disabled radio</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-sm-2">Checkbox</div>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">Example checkbox</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-dark">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Label Size</h4>
                                <p class="text-muted">Be sure to use <code>.col-form-label-sm .col-form-label-lg</code> correctly follow the size of <code>.form-control-lg and .form-control-sm.</code>
                                </p>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-sm" placeholder="col-form-label-sm">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" placeholder="col-form-label">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-lg" placeholder="col-form-label-lg">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Column size</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-row">
                                            <div class="col-7">
                                                <input type="text" class="form-control" placeholder="City">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="State">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Zip">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Auto-sizing</h4>
                                <p class="text-muted">The example below uses a flexbox utility to vertically center the contents and changes <code>.col .col-auto</code> so that your columns only take up as much space as needed. Put another way, the column sizes itself based
                                    on the contents.</p>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-row align-items-center">
                                            <div class="col-auto">
                                                <label class="sr-only">Name</label>
                                                <input type="text" class="form-control mb-2" placeholder="Jane Doe">
                                            </div>
                                            <div class="col-auto">
                                                <label class="sr-only">Username</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">@</div>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-dark mb-2">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Custom Select</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <label class="mr-sm-2">Preference</label>
                                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                    <option selected="selected">Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Custom Checkbox</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                                    <label class="custom-control-label">Remember my preference</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Disabled forms</h4>
                                <p class="text-muted">Add the <code>disabled</code> boolean attribute on an input to prevent user interactions and make it appear lighter.</p>
                                <div class="basic-form">
                                    <form>
                                        <fieldset disabled="disabled">
                                            <div class="form-group">
                                                <label>Disabled input</label>
                                                <input type="text" class="form-control" placeholder="Disabled input">
                                            </div>
                                            <div class="form-group">
                                                <label>Disabled select menu</label>
                                                <select class="form-control">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" disabled="disabled">
                                                <label class="form-check-label">Can't check this</label>
                                            </div>
                                            <button type="submit" class="btn btn-dark m-t-20">Submit</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Input Group</h4>
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Recipient's username">
                                            <div class="input-group-append"><span class="input-group-text">@example.com</span>
                                            </div>
                                        </div>
                                        <label>Your vanity URL</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">https://example.com</span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control">
                                            <div class="input-group-append"><span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">With textarea</span>
                                            </div>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Input Group Size</h4>
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Small</span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Default</span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend"><span class="input-group-text">Large</span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Checkboxes and radios</h4>
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="checkbox">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="radio">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Multiple inputs</h4>
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">First and last name</span>
                                            </div>
                                            <input type="text" class="form-control">
                                            <input type="text" class="form-control">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Multiple addons</h4>
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">$</span> <span class="input-group-text">0.00</span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <div class="input-group-append"><span class="input-group-text">$</span> <span class="input-group-text">0.00</span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button addons</h4>
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-dark" type="button">Button</button>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-dark" type="button">Button</button>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-dark" type="button">Button</button>
                                                <button class="btn btn-outline-dark" type="button">Button</button>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-dark" type="button">Button</button>
                                                <button class="btn btn-outline-dark" type="button">Button</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Buttons with dropdowns</h4>
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-dark dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                                    <div role="separator" class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-dark dropdown-toggle" type="button" data-toggle="dropdown">Dropdown</button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                                    <div role="separator" class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Segmented buttons</h4>
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-outline-dark">Action</button>
                                                <button type="button" class="btn btn-outline-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                                    <div role="separator" class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-dark">Action</button>
                                                <button type="button" class="btn btn-outline-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"><span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                                    <div role="separator" class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Custom select</h4>
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text">Options</label>
                                            </div>
                                            <select class="custom-select">
                                                <option selected="selected">Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
                                            <select class="custom-select">
                                                <option selected="selected">Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <div class="input-group-append">
                                                <label class="input-group-text">Options</label>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-dark" type="button">Button</button>
                                            </div>
                                            <select class="custom-select">
                                                <option selected="selected">Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <select class="custom-select">
                                                <option selected="selected">Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-dark" type="button">Button</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Custom file input</h4>
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                            <div class="input-group-append"><span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-dark" type="button">Button</button>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-dark" type="button">Button</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="http://localhost/ecommerce/Assets/Admin/plugins/common/common.min.js"></script>
    <script src="http://localhost/ecommerce/Assets/Admin/js/custom.min.js"></script>
    <script src="http://localhost/ecommerce/Assets/Admin/js/settings.js"></script>
    <script src="http://localhost/ecommerce/Assets/Admin/js/gleek.js"></script>
    <script src="http://localhost/ecommerce/Assets/Admin/js/styleSwitcher.js"></script>

</body>

</html>