<?php

/*Simple Search: jedes Element wird der Reihe nach durchsucht bis das gesuchte
Element gefunden wird, im worst case muss das gesamte array durchsucht werden.
- (Worst case) Running time: linear time O(n)

Binary Search: der mittlere Wert wird mit dem gesuchten Vergleichen,
entsprechend kann eine Hälfte der Werte ausgeschlossen Werten, andere Hälfte wird
wieder halbiert usw.

-funktioniert nur wenn die Liste/Array in sortierter Reihenfolge ist
-die binary_search Funktion nimmt ein sortiertes array und ein item. Wenn dieses im
Array enthalten ist wird die Position returned
-Mitte : Lowest + highest geteilt durch 2
- (Worst case) Running time: logarithmic time O(log n) -> schneller als O(n),
je höher die Anzahl von Operationen, desto schneller ist O(log n) -> Wachstum ist größer
 */

function binary_search(array $list, $item)
{
    $low = 0;
    $high = count($list) - 1;

    while ($low <= $high) {
        $mid = ($low + $high) / 2;
        $guess = $list[$mid];

        if ($guess == $item) {
            return floor($mid);
        } else if ($guess > $item) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }
    return null;
}

$list1 = [2, 4, 5, 9];
var_dump(binary_search($list1, 5));