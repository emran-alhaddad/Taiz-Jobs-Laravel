<!DOCTYPE html>
<html lang="en">

 @include("front.components.head")

<body>

 @include("front.components.header")


@yield('front-content')


 @include("front.components.modals")


 @include("front.components.footer")


<!-- Scripts  -->
 @include("front.components.scripts")

</body>

</html>
