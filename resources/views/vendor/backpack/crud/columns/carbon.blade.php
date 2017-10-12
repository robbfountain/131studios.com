<td>
    {{ Carbon\Carbon::createFromTimestamp($entry->$column['name'])->toDateTimeString() }}
</td>