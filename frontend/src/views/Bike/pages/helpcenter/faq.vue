<script  setup>
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Navigation, Pagination, Scrollbar, A11y } from 'swiper/modules'

const modules = [Navigation, Pagination, Scrollbar, A11y];
</script>

<template>
    <!-- FAQ-->
    <section class="container mb-5 pt-1 pb-2 py-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <h2 class="h3 mb-4 pb-3 text-light text-center">Frequently Asked Questions</h2>
                <!-- Nav tabs-->
                <div class="overflow-auto mx-n2">
                    <ul class="nav nav-tabs nav-tabs-light nav-fill flex-nowrap mb-md-4 mb-3 text-nowrap" role="tablist">
                        <li class="nav-item w-100 px-2"><a class="nav-link active" href="javascript:void(0);">General questions</a></li>
                        <li class="nav-item w-100 px-2"><a class="nav-link" href="javascript:void(0);">Buy or rent cars</a></li>
                        <li class="nav-item w-100 px-2"><a class="nav-link" href="javascript:void(0);">Sell cars</a></li>
                    </ul>
                </div>
                <!-- Tabs content-->
                <div class="pt-3">
                    <div class="accordion accordion-light" id="accordionFAQ">
                        <!-- Accordion item-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">How much does it cost to sell a car on Finder?</button>
                            </h2>
                            <div class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionFAQ" id="collapse-1">
                                <div class="accordion-body fs-sm text-light opacity-70">Aut dolores nemo rem commodi neque voluptatem molestiae cupiditate unde consequatur impedit, enim rerum eum ipsam. Eligendi, blanditiis ad? Laboriosam, distinctio nemo, culpa suscipit tenetur at est quis commodi similique impedit illum non dignissimos et cum aut, asperiores fugiat unde. Possimus autem iusto fugit ipsa natus, fugiat libero. Nemo sed nisi error.</div>
                            </div>
                        </div>
                        <!-- Accordion item-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">How do I take the best pictures of my car?</button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionFAQ" id="collapse-2">
                                <div class="accordion-body fs-sm text-light opacity-70">Porta mi integer lectus cras augue amet tellus. Mus in justo orci est urna facilisis vitae. Sem sagittis potenti scelerisque justo, etiam pharetra. In augue egestas nec rhoncus. Lectus tincidunt phasellus eu in erat eget id egestas nec. Purus massa blandit nibh ut sed tellus. Sit cras aliquam velit tellus leo. Sed vulputate erat dui eros, viverra. Cursus et nulla turpis sit. Egestas at non elementum non. Molestie nunc, diam etiam diam. Ac et turpis vestibulum porta.</div>
                            </div>
                        </div>
                        <!-- Accordion item-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">Can I sell a vehicle if I live outside of the United States?</button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionFAQ" id="collapse-3">
                                <div class="accordion-body fs-sm text-light opacity-70">Delectus perferendis libero ad sapiente unde cupiditate vero error autem ex sed culpa beatae vel, alias amet quam officiis repudiandae ab nobis! Animi ullam obcaecati praesentium at officia quos doloremque nihil aperiam debitis quasi placeat atque, amet laborum illo voluptates autem totam in mollitia! At, autem, ipsum quam minima doloribus distinctio aspernatur id et, cum reiciendis iste officia. Architecto tempore deserunt voluptates?</div>
                            </div>
                        </div>
                        <!-- Accordion item-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">How does the buyer get in contact with me and make payment?</button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#accordionFAQ" id="collapse-4">
                                <div class="accordion-body fs-sm text-light opacity-70">Impedit iusto cum vitae pariatur. Veritatis totam neque, libero non odio doloremque sequi ut, delectus optio cumque rerum illum? Libero corrupti neque magnam aliquam tempora debitis at voluptate alias, facilis ipsa dignissimos repellendus quaerat soluta dolorem ad ipsam nemo quisquam voluptatum quibusdam dolorum. Labore qui saepe ducimus iure fuga accusamus, commodi quod ex sed excepturi corrupti! Ducimus natus repellendus placeat mollitia harum nostrum similique earum qui ratione?</div>
                            </div>
                        </div>
                        <!-- Accordion item-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">Who writes the listing description for my car?</button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#accordionFAQ" id="collapse-5">
                                <div class="accordion-body fs-sm text-light opacity-70">Facere unde eveniet explicabo quidem, quaerat, nesciunt, minus in vel incidunt natus qui recusandae neque laudantium est vitae ipsam? Dolores natus nesciunt culpa accusantium tempora, recusandae, debitis, labore maxime a optio similique rem nam fuga vel doloremque suscipit repellendus veritatis necessitatibus. Architecto sit qui dolorum nihil ea!</div>
                            </div>
                        </div>
                        <!-- Accordion item-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">Are there rules to follow in the comments?</button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#accordionFAQ" id="collapse-6">
                                <div class="accordion-body fs-sm text-light opacity-70">Perspiciatis iste atque in quis recusandae libero maxime, quo sed itaque, totam quaerat earum dolorum accusantium? Optio quidem aliquam corporis, nesciunt nobis incidunt numquam commodi debitis cumque quisquam eum veniam quae eaque voluptates totam culpa aperiam sapiente minima sint sit facere dolorum excepturi ab odit? Adipisci exercitationem distinctio dolores obcaecati eligendi explicabo, ipsa dicta, tempore, enim molestias excepturi nihil vel! Quas, culpa.</div>
                            </div>
                        </div>
                        <!-- Accordion item-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">What currency does Finder use?</button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="heading-7" data-bs-parent="#accordionFAQ" id="collapse-7">
                                <div class="accordion-body fs-sm text-light opacity-70">Dolores assumenda dolorem saepe, consequatur praesentium alias numquam accusantium explicabo distinctio omnis voluptatum eum enim aspernatur vel, minus optio dolore ratione quasi sunt. Ab distinctio laborum dolore explicabo hic omnis iste quibusdam minus mollitia ad voluptate suscipit accusantium, laudantium sapiente? Aperiam est minus veniam explicabo repellendus id velit sit adipisci quam in!</div>
                            </div>
                        </div>
                        <!-- Accordion item-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">How do I contact a seller privately?</button>
                            </h2>
                            <div class="accordion-collapse collapse" aria-labelledby="heading-8" data-bs-parent="#accordionFAQ" id="collapse-8">
                                <div class="accordion-body fs-sm text-light opacity-80">Exercitationem vel perferendis temporibus corrupti laudantium sapiente. Nihil doloremque, tempora possimus cum aut cupiditate blanditiis, voluptates amet exercitationem officia nam animi distinctio sapiente iste ratione neque aspernatur? Voluptatum, nostrum maiores perspiciatis dolore consequatur minus voluptatem, numquam sunt voluptate esse fugiat illum culpa praesentium. Hic dicta quam id.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
