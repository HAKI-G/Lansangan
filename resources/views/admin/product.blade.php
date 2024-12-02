<!DOCTYPE html>
    <html lang="en">
    <head>
        @include('admin.css')
    </head>
    <body>
        
        <!-- partial -->
        @include('admin.sidebar')

        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <h1 style="display: inline; color: white;">This is inline header</h1>
        </div>
        <!-- partial -->
        @include('admin.script')
    </body>
    </html>