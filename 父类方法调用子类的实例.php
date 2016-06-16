<?php

/*父类方法返回子类实例:PHP延迟绑定

 */
class A
{
     public static function who(){
        echo __CLASS__;
     }

     public static function test()
     {
            //self::who();//输出为A
          static::who();//后期静态绑定从这里开始输出B
         // self和__CLASS__仅对当前类的静态引用
     }


}


class B extends A
{
     public static function who()
     {
        echo __CLASS__;
     }
}


B::test();//B

A::test();//A