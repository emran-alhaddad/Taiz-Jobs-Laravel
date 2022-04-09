    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="../index.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Done Modal -->
    <div id="DoneModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h4 class="modal-title w-100">Operation Done</h4>
                </div>
                <div class="modal-body">
                    <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Skill Module -->

    <div id="deleteModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="fas fa-trash-alt"></i>
                    </div>
                    <h4 class="modal-title w-100">Are you sure?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#DoneModal">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Skill Module  -->

    <div class="modal fade show" id="addSkill" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Skills</h4>
                    <a href="#" data-dismiss="modal">
                        <i class="far fa-window-close text-danger" style="font-size: 2em;"></i>
                    </a>

                </div>
                <div class="modal-body">
                    <form class="needs-validation" novalidate="">

                        <section class="py-6 bg-light-primary">
                            <div class="container">
                                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1   ">
                                    <div class="col-12 my-3">
                                        <div class="card border-hover-primary hover-scale">
                                            <div class="card-body">
                                                <div class="container mb-3">
                                                    <div class="contain">
                                                        <svg x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200">
                                                          <circle class=""
                                                                  stroke="#d1d1d1"
                                                                  fill="none"
                                                                  stroke-width="3"
                                                                  cx="100" cy="100" r="80" />
                                                          <circle class="path"
                                                                  stroke="hotpink"
                                                                  fill="none"
                                                                  stroke-width="5"
                                                                  cx="100" cy="100" r="80" />
                                                        </svg>


                                                        <input id="range" type="range" min="0" max="100" step="1" value="0">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="skillName" class="form-label">Skill Title</label>
                                            <input type="text" class="form-control rounded-pill" id="skillName" placeholder="Ex. HTML">
                                        </div>
                                        <div class="col-12">
                                            <label for="skillCap" class="form-label">Skill Caption</label>
                                            <input type="text" class="form-control rounded-pill" id="skillCap" placeholder="Ex. Native">
                                        </div>
                                        <div class="col-12">
                                            <label for="skillImage" class="form-label">Skill Image</label>
                                            <input type="file" class="form-control" id="skillImage">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal" data-toggle="modal" data-target="#DoneModal">Save</button>
                </div>
            </div>
        </div>
    </div>
