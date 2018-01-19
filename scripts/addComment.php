
                                        <script type="text/javascript">
                                            $(document).ready(function () {
                                                $('#add-comment-form').submit( function(e){
                                                    e.preventDefault();
                                                    var data = $(this).serialize();
                                                    $.ajax({
                                                        type: 'POST',
                                                        url: "/scripts/addComment.php",
                                                        data: data,
                                                        success: function (result) {
                                                            $(#add-comment-container).add(result);
                                                        }
                                                    });
                                                }); 
                                            });
                                        </script>

