<?php
function select( $arr ){
    $length = count( $arr );
    for( $outer = 0; $outer < $length; $outer++ ){
        $min_index = $outer;
        for( $inner = $outer + 1; $inner < $length; $inner++ ){
            if( $arr[ $min_index ] > $arr[ $inner ] ){
                $min_index = $inner;
            }
        }
        if( $min_index != $outer ){
            $temp = $arr[ $outer ];
            $arr[ $outer ] = $arr[ $min_index ];
            $arr[ $min_index ] = $temp;
        }
    }
    return $arr;
}