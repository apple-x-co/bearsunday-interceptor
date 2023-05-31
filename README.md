# bearsunday-interceptor

---

```bash
php ./bin/page.php get /a
```

```text
2023-05-31 09:19:00 MyVendor\MyProject\Interceptor\InterceptorA::MyVendor\MyProject\Interceptor\InterceptorA::invoke (before)
2023-05-31 09:19:00 MyVendor\MyProject\Resource\Page\A::MyVendor\MyProject\Resource\Page\A::onGet
2023-05-31 09:19:00 MyVendor\MyProject\Interceptor\InterceptorA::MyVendor\MyProject\Interceptor\InterceptorA::invoke (after)
```

---

```bash
php ./bin/page.php get /ab
```

```text
2023-05-31 09:19:28 MyVendor\MyProject\Interceptor\InterceptorA::MyVendor\MyProject\Interceptor\InterceptorA::invoke (before)
2023-05-31 09:19:28 MyVendor\MyProject\Interceptor\InterceptorB::MyVendor\MyProject\Interceptor\InterceptorB::invoke (before)
2023-05-31 09:19:28 MyVendor\MyProject\Resource\Page\Ab::MyVendor\MyProject\Resource\Page\Ab::onGet
2023-05-31 09:19:28 MyVendor\MyProject\Interceptor\InterceptorB::MyVendor\MyProject\Interceptor\InterceptorB::invoke (after)
2023-05-31 09:19:28 MyVendor\MyProject\Interceptor\InterceptorA::MyVendor\MyProject\Interceptor\InterceptorA::invoke (after)
```

---

```bash
php ./bin/page.php get /abc
```

```text
2023-05-31 09:20:54 MyVendor\MyProject\Interceptor\InterceptorA::MyVendor\MyProject\Interceptor\InterceptorA::invoke (before)
2023-05-31 09:20:54 MyVendor\MyProject\Interceptor\InterceptorB::MyVendor\MyProject\Interceptor\InterceptorB::invoke (before)
2023-05-31 09:20:54 MyVendor\MyProject\Interceptor\InterceptorC::MyVendor\MyProject\Interceptor\InterceptorC::invoke (before)
2023-05-31 09:20:54 MyVendor\MyProject\Resource\Page\Abc::MyVendor\MyProject\Resource\Page\Abc::onGet
2023-05-31 09:20:54 MyVendor\MyProject\Interceptor\InterceptorC::MyVendor\MyProject\Interceptor\InterceptorC::invoke (after)
2023-05-31 09:20:54 MyVendor\MyProject\Interceptor\InterceptorB::MyVendor\MyProject\Interceptor\InterceptorB::invoke (after)
2023-05-31 09:20:54 MyVendor\MyProject\Interceptor\InterceptorA::MyVendor\MyProject\Interceptor\InterceptorA::invoke (after)
```

---

```bash
php ./bin/page.php get /abcd
```

```text
2023-05-31 09:21:42 MyVendor\MyProject\Interceptor\InterceptorA::MyVendor\MyProject\Interceptor\InterceptorA::invoke (before)
2023-05-31 09:21:42 MyVendor\MyProject\Interceptor\InterceptorB::MyVendor\MyProject\Interceptor\InterceptorB::invoke (before)
2023-05-31 09:21:42 MyVendor\MyProject\Interceptor\InterceptorC::MyVendor\MyProject\Interceptor\InterceptorC::invoke (before)
2023-05-31 09:21:42 MyVendor\MyProject\Interceptor\InterceptorD::MyVendor\MyProject\Interceptor\InterceptorD::invoke (before)
2023-05-31 09:21:42 MyVendor\MyProject\Resource\Page\Abcd::MyVendor\MyProject\Resource\Page\Abcd::onGet
2023-05-31 09:21:42 MyVendor\MyProject\Interceptor\InterceptorD::MyVendor\MyProject\Interceptor\InterceptorD::invoke (after)
2023-05-31 09:21:42 MyVendor\MyProject\Interceptor\InterceptorC::MyVendor\MyProject\Interceptor\InterceptorC::invoke (after)
2023-05-31 09:21:42 MyVendor\MyProject\Interceptor\InterceptorB::MyVendor\MyProject\Interceptor\InterceptorB::invoke (after)
2023-05-31 09:21:42 MyVendor\MyProject\Interceptor\InterceptorA::MyVendor\MyProject\Interceptor\InterceptorA::invoke (after)
```

---

```bash
php ./bin/page.php get /arb
```

```text
2023-05-31 09:27:35 MyVendor\MyProject\Interceptor\InterceptorA::MyVendor\MyProject\Interceptor\InterceptorA::invoke (before)
2023-05-31 09:27:35 MyVendor\MyProject\Interceptor\InterceptorReturn::MyVendor\MyProject\Interceptor\InterceptorReturn::invoke
2023-05-31 09:27:35 MyVendor\MyProject\Interceptor\InterceptorA::MyVendor\MyProject\Interceptor\InterceptorA::invoke (after)
```

---

```bash
php ./bin/page.php get /abrcd
```

```text
2023-05-31 09:30:57 MyVendor\MyProject\Interceptor\InterceptorA::MyVendor\MyProject\Interceptor\InterceptorA::invoke (before)
2023-05-31 09:30:57 MyVendor\MyProject\Interceptor\InterceptorB::MyVendor\MyProject\Interceptor\InterceptorB::invoke (before)
2023-05-31 09:30:57 MyVendor\MyProject\Interceptor\InterceptorReturn::MyVendor\MyProject\Interceptor\InterceptorReturn::invoke
2023-05-31 09:30:57 MyVendor\MyProject\Interceptor\InterceptorB::MyVendor\MyProject\Interceptor\InterceptorB::invoke (after)
2023-05-31 09:30:57 MyVendor\MyProject\Interceptor\InterceptorA::MyVendor\MyProject\Interceptor\InterceptorA::invoke (after)
```
