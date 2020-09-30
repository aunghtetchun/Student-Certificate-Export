<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/feather-icons-web/feather.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/vendor/animate_it/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendor/data_table/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<body>

<div class="container-fluid ">
    <div class="row ">
        <div class="col-12 col-md-6 col-lg-3 col-xl-2 vh-100 aside-left  p-0 pb-2 shadow" style="list-style-type: none">
            <ul class="list-group menu mt-5">
                <li>
                    <a class="menu-item text-decoration-none  mt-3 m_color " href="# ">
                    <p>
                        <i class="feather-home mr-2"></i>
                        Dashboard
                    </p>
                    </a>
                </li>
                <li class="pt-4 pb-2">
                    <h5 class="m_color ">
                        Apps
                    </h5>
                </li>
                <li>
                    <a class="menu-item text-decoration-none  mt-3 m_color " href="# ">
                    <p>
                        <i class="feather-mail mr-2"></i>
                        Email
                    </p>
                    </a>
                </li>
                <li>
                    <a class="menu-item text-decoration-none  mt-3 m_color " href="# ">
                    <p>
                        <i class="feather-bar-chart mr-2"></i>
                        Chart
                    </p>
                    </a>
                </li>
                <li>
                    <a class="menu-item text-decoration-none  mt-3 m_color " href="# ">
                    <p>
                        <i class="feather-list mr-2"></i>
                        Todo
                    </p>
                    </a>
                </li>
                <li>
                    <a class="menu-item text-decoration-none  mt-3 m_color " href="# ">
                    <p>
                        <i class="feather-calendar mr-2"></i>
                        Calender
                    </p>
                    </a>
                </li>
            </ul>

        </div>
        <div class="col-12 col-md-12 col-lg-9 asr_bg col-xl-10 aside-right vh-100">
            <nav class="nav header d-flex align-items-center border sd px-3 py-2 my-3 rounded bg-light " >
                <a class="nav-link  " href="#" >
                    <i class="feather-mail"></i>
                </a>
                <a class="nav-link " href="#" >
                    <i class="feather-message-square"></i>
                </a>
                <a class="nav-link " href="#" >
                    <i class="feather-shopping-bag"></i>
                </a>
                <a class="nav-link  " href="#" >
                    <i class="feather-calendar"></i>
                </a>
                <div class="ml-auto d-flex flex-wrap align-items-center h-100">
                    <div class="mr-2 text-right">
                        <h6 class="mb-0 pb-0">Aung Htet Chon</h6>
                        <small>Avaliable</small>
                    </div>
                    <img  src="{{ asset('dashboard/images/logo.png') }}" alt="" style="height: 50px; width: 50px;">
                </div>
            </nav>
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi architecto aut autem commodi delectus distinctio dolores explicabo, fugiat impedit ipsum maxime minima neque odit quo reprehenderit sequi ut voluptates.</span><span>Inventore odio, tenetur! Aliquam amet, animi eligendi id ipsa nobis obcaecati reiciendis unde! Asperiores doloremque doloribus dolorum eos explicabo natus officiis similique velit. Accusantium aliquid incidunt ipsum officia rem velit.</span><span>Blanditiis corporis dolorum omnis provident repellat saepe, sint suscipit veritatis! Assumenda dolor dolorem excepturi expedita hic neque voluptatibus, voluptatum. Architecto blanditiis, cumque eius impedit in mollitia omnis voluptas voluptates? Cupiditate?</span><span>Ab atque cupiditate debitis error impedit ipsam, laudantium modi molestiae molestias odio praesentium provident quaerat, qui repellat, sed soluta velit voluptatum? Amet at beatae exercitationem fugit impedit, natus perspiciatis voluptatem.</span><span>Atque earum, facilis laborum maxime quisquam reiciendis! A ad alias aspernatur dolorem ducimus earum ex explicabo illo, iste, laudantium maiores molestias nam nisi quidem quis repudiandae sunt, tempore veniam voluptates?</span><span>Aliquid distinctio doloremque mollitia. Accusamus delectus doloremque, doloribus eveniet ex illo laudantium maxime, minus nobis omnis optio quo quos rem repellat repudiandae sed temporibus ullam! Distinctio labore molestias nihil voluptatum!</span><span>Amet at atque deserunt dicta distinctio doloremque dolorum ducimus, enim esse impedit in iusto laboriosam molestiae nam obcaecati perferendis praesentium quae qui quis quos ratione tempora, unde ut veniam voluptas?</span><span>At aut earum eos, facere illum impedit incidunt iste iure natus nesciunt nostrum quam quibusdam tempore vero voluptate? Commodi dignissimos facilis hic officia quia quisquam quo rem sequi soluta ut.</span><span>Commodi distinctio esse labore odit! Ad eius libero perspiciatis. A consequatur consequuntur distinctio dolore ex facere incidunt, iste maxime nobis quos repellat vel vero voluptatibus. Accusamus molestiae recusandae tempore. Delectus?</span><span>Consectetur consequuntur ducimus earum eius enim expedita facere fuga incidunt inventore ipsa ipsum iste itaque, laudantium molestias natus nostrum optio provident quae quia quos repellendus sequi sit soluta veritatis voluptates.</span><span>Animi aspernatur autem dolore dolorem error et facilis fugit illum inventore iste itaque laboriosam laudantium maxime, minus, molestias nihil odit placeat quibusdam, quod recusandae suscipit tempora veniam vero. Ipsam, quod.</span><span>Ad atque autem dicta eligendi id magni officia quae quo repudiandae, tempore totam unde vel, veniam! Amet beatae dolor molestias non omnis possimus quam rerum ullam. Culpa eum reprehenderit rerum?</span><span>Adipisci consequatur error et ex excepturi fugiat ipsa labore magnam modi molestias odio, omnis pariatur placeat quibusdam rem sed, similique soluta? Accusantium, atque delectus illo itaque minus quas repellendus voluptatum.</span><span>Aperiam, atque blanditiis cupiditate dolorem dolores harum id, nobis nostrum numquam praesentium quae, suscipit tempora vero! Accusamus architecto debitis error est et fuga fugiat, omnis pariatur sed tempora temporibus voluptatum.</span><span>Animi, assumenda, beatae commodi dolores enim esse est exercitationem expedita maiores molestiae nemo neque optio quae quas rem saepe, sit tempora voluptatem. Animi distinctio illo itaque, nostrum porro saepe velit.</span><span>Aspernatur cum deleniti dolore, dolorem inventore laborum nihil optio perferendis quibusdam? Consequuntur cum eligendi, ex itaque obcaecati, repellat sapiente sed tenetur vero, vitae voluptas voluptatibus. Animi dolore magni quos ullam!</span><span>Eveniet, illo, quae? Assumenda aut consequatur culpa dignissimos ea enim excepturi explicabo fugit id inventore ipsum iusto laborum natus nihil nisi nobis pariatur quidem repudiandae totam, velit vitae voluptatem voluptatibus.</span><span>Aspernatur aut corporis, deleniti doloremque eius esse ipsa iure laboriosam magni maiores, modi nemo placeat, praesentium quas quasi quis voluptas. Aut deserunt harum hic in iste non quibusdam repellat soluta!</span><span>Accusamus animi asperiores distinctio doloribus eius eligendi error ex excepturi explicabo, facilis harum ipsa molestias, natus obcaecati odit omnis possimus qui quia repellat repellendus sed sequi sint temporibus ullam voluptatum?</span><span>Architecto blanditiis enim illum, iusto laborum odio soluta vitae? Accusamus atque odit quasi veritatis voluptate. Aliquam, aperiam aut autem consequatur dolor eius expedita ipsam nihil quidem repudiandae voluptate, voluptatibus! Repudiandae!</span><span>Accusantium aspernatur dolores impedit iure iusto modi nam, possimus rerum voluptate! Asperiores fugiat neque odit rerum veritatis. Alias at ea exercitationem fugiat labore laboriosam, modi quae quisquam vel velit, voluptatibus.</span><span>Accusantium aut dignissimos molestias nesciunt obcaecati odio recusandae sint, suscipit. Alias aliquam assumenda consectetur deleniti fugiat, ipsam, maxime nemo quas quis reprehenderit, sequi sit! Eaque laborum officia quibusdam quidem temporibus.</span><span>Accusamus cupiditate laboriosam neque obcaecati perspiciatis? Accusamus animi deserunt inventore modi provident quisquam totam vero. Fuga laboriosam mollitia quasi! Accusamus cupiditate dignissimos ea eligendi id in laboriosam officiis possimus veniam.</span><span>Asperiores aspernatur deserunt dignissimos dolor ea eius eligendi et eum excepturi iusto labore, libero magnam magni molestiae odit, omnis optio quae quo ratione rem saepe sit soluta sunt suscipit tenetur.</span><span>Adipisci architecto consequatur eos error esse et, minima nam nobis pariatur possimus, praesentium quaerat quos saepe ullam voluptate! Blanditiis consequuntur expedita impedit ipsum iusto molestias recusandae. Doloribus omnis porro voluptates.</span><span>Adipisci debitis dolorum earum eligendi facilis illum ipsum laborum libero maiores neque odio perspiciatis, quam quidem reiciendis soluta velit veritatis voluptate! Debitis deserunt dolore exercitationem fugit optio quae rem vel!</span><span>Accusamus adipisci architecto atque autem dignissimos eligendi enim eos est eum harum inventore laboriosam magni nemo nihil obcaecati officia optio perspiciatis placeat possimus quaerat sequi sint, soluta totam unde veritatis!</span><span>Aliquam commodi fugit iusto molestias natus, qui quo quod sit veniam vitae. Aliquam amet aperiam, at commodi debitis dolorum impedit ipsum magnam maxime minus obcaecati pariatur provident, quas sint voluptatibus?</span><span>Aperiam asperiores dignissimos, earum ex exercitationem fugit hic ipsam itaque libero magnam, molestias nihil nobis obcaecati odit quaerat quod saepe sint unde vero voluptatum. Dolore explicabo quo recusandae! Aliquid, ex.</span><span>Asperiores, autem debitis ea earum error est ex expedita facere illo itaque magni maiores natus officiis perspiciatis, quibusdam reprehenderit saepe unde. Ad facilis id minus officiis quam sed tempore, veniam!</span><span>Accusamus accusantium, amet assumenda cum cumque dignissimos dolore dolores et magnam numquam officia perferendis quaerat quas, repellat soluta veritatis vitae voluptas? Accusamus doloribus laboriosam necessitatibus officia optio sapiente tempora ut.</span><span>A adipisci alias architecto assumenda commodi consequatur debitis delectus dolores excepturi exercitationem facere, inventore iure molestiae natus odio pariatur quam quas quis ratione sed sint temporibus voluptatum? Asperiores esse, soluta.</span><span>Adipisci at, dolor doloribus error est et excepturi explicabo illo illum impedit iste itaque nam natus odit vel voluptas voluptate! Architecto fugit sequi suscipit? Doloribus expedita odio praesentium! Accusamus, vero.</span><span>Culpa magnam maxime quisquam recusandae tempora. Accusantium asperiores aut delectus, esse expedita harum hic ipsam iusto libero molestias mollitia odio officia optio, possimus quidem quis quisquam recusandae sed tempore voluptates.</span><span>Dolorum molestiae reiciendis sed soluta velit! Accusantium at aut eaque eum exercitationem, expedita explicabo fuga incidunt iusto minima natus nisi quaerat quasi sed similique soluta tenetur vel vero? Nisi, quaerat.</span><span>Animi aperiam deserunt, distinctio, dolor eaque eius esse est illum iusto magni molestiae nam natus neque nostrum omnis perferendis quo ratione reprehenderit sed sint sit tempora tempore unde veniam veritatis.</span><span>Dolore facilis, repellendus? Ab aliquam amet debitis dolorem esse. Architecto aut cumque eum ipsa maxime, necessitatibus recusandae reiciendis? Iusto necessitatibus neque nihil quo quod unde! Aliquid cupiditate ipsum saepe vel.</span><span>Ad eius fugiat ipsum iusto quam similique. Alias doloremque ea fugit, illum in laboriosam, laborum minus nisi omnis, soluta ullam voluptates! Aspernatur, deleniti dolorem hic laudantium nulla omnis. Cumque, repellendus!</span><span>Assumenda dolor dolorem eius in maxime molestias mollitia nostrum placeat suscipit tempore? Accusantium ad aut in ipsum molestiae necessitatibus nemo neque nesciunt nulla, porro quae quas, tempore tenetur, ullam voluptate?</span><span>Ad aliquam architecto distinctio dolorem maxime nesciunt numquam possimus sapiente sed. Aliquid dolore dolorem ducimus eos ex explicabo in inventore iure iusto laborum magni minus, officiis, possimus quaerat sequi tempore!</span><span>Accusamus accusantium blanditiis culpa deleniti deserunt dignissimos dolor dolorem error excepturi exercitationem fugit illo impedit iste labore laudantium molestias nisi odio officia, officiis perferendis perspiciatis placeat quaerat quia reprehenderit soluta.</span><span>Illo labore magnam nesciunt officia praesentium qui, rem voluptatem? A esse, fugit illum impedit labore maiores minima, minus natus neque porro quas quibusdam temporibus velit? Ad ducimus facere placeat quo.</span><span>Aliquid atque cum deserunt dolores enim eveniet expedita explicabo laudantium, mollitia nam nostrum obcaecati optio quasi quo quod recusandae repudiandae unde. Dolore eaque laborum nemo nihil officiis pariatur ratione sunt!</span><span>Delectus earum itaque natus nesciunt nulla. Amet aut blanditiis deserunt dolor, dolore exercitationem hic ipsum iure iusto libero nostrum officia possimus provident qui quod soluta voluptatum? Alias distinctio explicabo incidunt.</span><span>Commodi consectetur deleniti dicta dolor eveniet, facere facilis fugit harum ipsa, ipsum libero modi necessitatibus nisi nobis perferendis quas quia sapiente, similique sunt tenetur totam unde vitae voluptates? Incidunt, sapiente?</span><span>Asperiores dicta distinctio ea fugiat id minus modi, mollitia natus numquam odit pariatur, placeat possimus praesentium, quae quas quod recusandae totam unde ut veniam. Animi dicta facere illum ipsa quo!</span><span>Corporis debitis dolore eaque eligendi est, ex, expedita fugit incidunt iure minima obcaecati possimus repellat saepe suscipit vitae voluptatem voluptatibus. Cumque iusto, laudantium officia perspiciatis quam quisquam quos reiciendis vel.</span><span>Asperiores, at atque ea eveniet expedita fuga inventore iure laboriosam maxime necessitatibus nesciunt perspiciatis provident quas rem repudiandae rerum soluta temporibus! Consequatur distinctio exercitationem facilis ipsam molestiae quaerat sit veritatis.</span><span>Alias aliquam amet architecto atque commodi consequatur cumque dolores dolorum eaque excepturi expedita facilis fuga id ipsa laborum laudantium maiores necessitatibus nesciunt nihil perspiciatis, quaerat ratione recusandae sit soluta sunt.</span><span>At maxime obcaecati perferendis quisquam? Aliquid corporis eaque eligendi eveniet fuga, id nam nemo perferendis placeat sint sunt tenetur ullam, voluptatibus. Animi, corporis ea impedit ipsum perspiciatis quisquam tempore totam!</span><span>Eum fugit non repellat! Assumenda at autem cumque debitis dolorum est, excepturi expedita iure iusto minus necessitatibus nulla officiis omnis quae quod recusandae rem voluptatem. Delectus eius libero molestias nam.</span><span>Adipisci aliquam aperiam aut autem cupiditate dolore ea eius eos est eveniet iure labore minus omnis perferendis possimus, quam quis ratione recusandae repellat voluptates? Accusamus commodi nihil nulla sequi unde?</span><span>Aliquid ducimus eaque ex fugit hic inventore, molestiae ullam. Amet autem consequuntur deserunt dolore eos impedit labore laboriosam magnam magni, maxime modi molestiae necessitatibus obcaecati quis quo quod sint veniam!</span><span>Ab ad beatae doloremque, dolorum ducimus eligendi eos exercitationem, fuga impedit in ipsa iste iusto laborum maxime molestiae nisi, numquam odio omnis perferendis quisquam sit tenetur ullam unde vero vitae?</span><span>Ad asperiores at autem beatae, cum esse exercitationem inventore natus nobis omnis quisquam, reiciendis voluptates. Asperiores aspernatur autem cumque cupiditate debitis, delectus dignissimos id ipsum labore nemo provident ratione tempora.</span></p>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="{{ asset('dashboard/js/jquery.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{ asset('dashboard/js/bootstrap.js') }}"></script>
<script src="{{ asset('dashboard/vendor/data_table/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboard/vendor/data_table/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('dashboard/js/app.js') }}"></script>

</body>
</html>
