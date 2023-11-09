<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

   
    @can('administrateur')
    
   <div>Section 1</div>
   @endcan
   @can('manager')
   <div>Section 2</div>
   @endcan
   <div>Section 3</div>
   
</body>
</html>