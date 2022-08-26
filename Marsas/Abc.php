<?php

class Abc {
    
    use A, B;{
    B::read insteadof A;
    A::read as read_bla;
    }
}