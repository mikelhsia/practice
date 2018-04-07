<?php 
/* 依赖注入 (Dependency Injection)
 * 不是我自身的，却是我需要的，都是我所依赖的。一切需要外部提供的，都是需要进行依赖注入的。
 *** 使用依赖注入，最重要的一点好处就是有效的分离了对象和它所需要的外部资源
 * 整个过程中参与者都有谁？
 * 一般有三方参与者，一个是某个对象；一个是IoC/DI的容器；另一个是某个对象的外部资源。
 * 某个对象指的就是任意的、普通的PHP对象; 
 * IoC/DI的容器简单点说就是指用来实现IoC/DI功能的一个框架程序；
 * 对象的外部资源指的就是对象需要的，但是是从对象外部获取的，都统称资源，比如：对象需要的其它对象、或者是对象需要的文件资源等等。
 * 1. 谁依赖于谁：
 *    当然是某个对象依赖于IoC/DI的容器
 * 2. 为什么需要依赖：
 *    对象需要IoC/DI的容器来提供对象需要的外部资源
 * 3. 谁注入于谁：
 *    是IoC/DI的容器 注入 某个对象
 * 4. 到底注入什么：
 *    就是注入某个对象所需要的外部资源
 * 5. 谁控制谁：
 *    当然是IoC/DI的容器来控制对象了
 * 6. 控制什么：
 *    主要是控制对象实例的创建
 * 7. 为何叫反转：
 *    反转是相对于正向而言的，那么什么算是正向的呢？
 *    考虑一下常规情况下的应用程序，如果要在A里面使用C，你会怎么做呢？当然是直接去创建C的对象，也就是说，
 *    是在A类中主动去获取所需要的外部资源C（$c = new C();），这种情况被称为正向的。那么什么是反向呢？
 *    就是A类不再主动去获取C，而是被动等待，等待IoC/DI的容器获取一个C的实例，然后反向的注入到A类中。
 */
class Boy {
  protected $girl;

  public function __construct(Girl $girl) {
    $this->girl = $girl;
  }
}

class Girl {
  // 
}

$boy = new Boy();  // Error; Boy must have girlfriend!

// so 必须要给他一个女朋友才行 
$girl = new Girl();

// Right! So Happy!
$boy = new Boy($girl); 