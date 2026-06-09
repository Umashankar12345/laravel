<!DOCTYPE html>
<html>
<head>
    <title>Switch Result</title>
</head>
<body>

<h2>Result</h2>

@switch($number)

    @case(1)
        First Case
        @break

    @case(2)
        Second Case
        @break

    @case(3)
        Third Case
        @break

    @default
        Invalid Case

@endswitch

</body>
</html>