{{-- enumerate the values in an array  --}}
{{-- enumerate the values in an array  --}}
<td>

<?php
$value = $entry->{$column['name']};

// the value should be an array wether or not attribute casting is used
if(!is_array($value)) {
    $value = json_decode($value, true);
}
if($value && count($value)) {
    foreach($value as $key => $item) {
        echo ucfirst(str_replace('_',' ',$key)) . " : {$item} <br>";
    }

}
?>
</td>
