jQuery(document).ready((function($){if(page_generator_pro_conditional_fields_initialize(),$('select[name="source"]').trigger("change"),$("textarea#data").length>0&&wp.codeEditor.initialize($("textarea#data"),page_generator_pro_keywords),$("table.page-generator-pro-keywords-table").length)var e=$("table.page-generator-pro-keywords-table").DataTable({ajax:{url:ajaxurl,type:"POST",data:{action:"page_generator_pro_keywords_get_terms",nonce:$('input[name="nonce"]').val(),id:$("table.page-generator-pro-keywords-table").data("keyword-id")}},processing:!0,serverSide:!0,responsive:!0,autoWidth:!0,scrollX:!0,scrollY:500})}));