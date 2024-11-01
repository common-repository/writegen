(function ($) {
   $(document).ready(function () {
      "use strict";
      //Global variable
      var wrigHomeUrl = wrig_data.home_url;
      var wrigOpenApiKey = wrig_data.wrig_open_api_key;
      var wrigSerpApiLogin = wrig_data.wrig_serp_api_login;
      var wrigSerpApiPassword = wrig_data.wrig_serp_api_password;
      var wrigAnalysisKeyword = "";

      /************************************************
       *         Widget Canvas open and close         *
       *************************************************/
      $(".wrig-editor-button").on("click", function () {
         $(".wrig-sidebar-footer").hide();
         $(".wrig-sidebar-area").toggleClass("opened");
         if ($(".wrig-sidebar-area").hasClass("opened")) {
            $(".wrig-sidebar-area").css("transform", "translateX(0)");
         } else {
            $(".wrig-sidebar-area").css("transform", "");
         }
      });

      $(".wrig-wc-editor-button").on("click", function () {
         $(".wrig-sidebar-footer").hide();
         $(".wrig-sidebar-area").toggleClass("opened");
         if ($(".wrig-sidebar-area").hasClass("opened")) {
            $(".wrig-sidebar-area").css("transform", "translateX(0)");
         } else {
            $(".wrig-sidebar-area").css("transform", "");
         }
      });

      $("#wpbody").on("click", ".wrig-gutenberg-button", function () {
         $(".wrig-sidebar-area").css("margin-top", "0");
         $(".wrig-sidebar-footer").hide();
         $(".wrig-sidebar-area").toggleClass("opened");
         if ($(".wrig-sidebar-area").hasClass("opened")) {
            $(".wrig-sidebar-area").css("transform", "translateX(0)");
         } else {
            $(".wrig-sidebar-area").css("transform", "");
         }
      });

      $(".wrig-sidebar-close-btn").on("click", function () {
         $(".wrig-sidebar-area").toggleClass("opened");
         if ($(".wrig-sidebar-area").hasClass("opened")) {
            $(".wrig-sidebar-area").css("transform", "translateX(0)");
         } else {
            $(".wrig-sidebar-area").css("transform", "");
         }
      });

      //nice select
      $(".wrig-select select").niceSelect();

      $(".wrig-quantity-minus").on("click", function () {
         var $input = $(this).parent().find("input");
         var count = parseInt($input.val()) - 1;
         count = count < 1 ? 1 : count;
         $input.val(count);
         $input.change();
         return false;
      });

      $(".wrig-quantity-plus").on("click", function () {
         var $input = $(this).parent().find("input");
         $input.val(parseInt($input.val()) + 1);
         $input.change();
         return false;
      });

      $(".wrig-quantity-minus-2").on("click", function () {
         var $input = $(this).parent().find("input");
         var count = parseInt($input.val()) - 1;
         count = count < 1 ? 1 : count;
         $input.val(count);
         $input.change();
         return false;
      });

      $(".wrig-quantity-plus-2").on("click", function () {
         var $input = $(this).parent().find("input");
         $input.val(parseInt($input.val()) + 1);
         $input.change();
         return false;
      });

      $(".wrig-keyword-analysis-show").on(
         "click",
         ".wrig-analysis-open-btn",
         function (e) {
            e.preventDefault();
            var $this = $(this);
            $this
               .closest(".wrig-analysis-item")
               .find(".wrig-analysis-info-wrapper")
               .slideToggle();
         }
      );

      $(".wrig-toggle-btn").each(function () {
         var $this = $(this);
         $this.find("label").on("click", function () {
            var attrVal = $this.find("input").attr("checked");
            if (attrVal == "checked") {
               $this.find("input").attr("checked", false);
               $this.find("span").removeClass("is-checked");
            } else {
               $this.find("input").attr("checked", "checked");
               $this.find("span").addClass("is-checked");
            }
         });
      });

      $(".wrig-toggle-switch-item").each(function () {
         var $this = $(this);
         $this.find("label").on("click", function () {
            var attrVal = $this.find("input").attr("checked");
            if (attrVal == "checked") {
               $this.find("input").attr("checked", false);
               $(this).removeClass("is-checked");
            } else {
               $this.find("input").attr("checked", "checked");
               $(this).addClass("is-checked");
            }
         });
      });

      // tabs
      if ($(".wrig-dashboard-area.tabs-box").length) {
         $(".wrig-dashboard-area.tabs-box .tab-buttons .tab-btn").on(
            "click",
            function (e) {
               e.preventDefault();
               var target = $($(this).attr("data-tab"));

               target
                  .parents(".tabs-box")
                  .find(".tab-buttons")
                  .find(".tab-btn")
                  .removeClass("active-btn");

               $(this).addClass("active-btn");

               target
                  .parents(".tabs-box")
                  .find(".tabs-content")
                  .find(".tab")
                  .fadeOut(0);
               target
                  .parents(".tabs-box")
                  .find(".tabs-content")
                  .find(".tab")
                  .removeClass("active-tab");
               $(target).fadeIn(300);
               $(target).addClass("active-tab");
            }
         );
      }

      //Toastify for dashboard
      function wrigShowToast(message) {
         var toast = $('<div class="wrig-toast"></div>').text(message);
         $("#wrig-toast-container").append(toast);
         toast
            .fadeIn(400)
            .delay(3000)
            .fadeOut(400, function () {
               $(this).remove();
            });
      }

      function wrigShowToastWidget(message) {
         var toast = $('<div class="wrig-toast"></div>').text(message);
         $("#wrig-widget-toast-container").append(toast);
         toast
            .fadeIn(400)
            .delay(3000)
            .fadeOut(400, function () {
               $(this).remove();
            });
      }

      /************************************************
       *            Widget Canvas Condition            *
       *************************************************/
      $(".wrig-sidebar-cancel-btn").on("click", function () {
         $(".wrig-sidebar-main-content").fadeOut("slow", function () {
            $(".wrig-all-widget-canvas").show();
            $(".wrig-all-widget-canvas .wrig-sidebar-content").show();
            $(".wrig-widget-blog-footer").addClass("footer-hide");
            $(".wrig-widget-woocommerce-footer").addClass("footer-hide");
         });
         $(".wrig-sidebar-area").scrollTop(0);
      });

      $("#wrig-blog-widget").on("click", function () {
         if (!$(this).hasClass("wrig-post-widget")) {
            $(".wrig-all-widget-canvas").fadeOut("slow", function () {
               $(".wrig-blog-widget-canvas").fadeIn("slow");
               $(".wrig-widget-woocommerce-footer").addClass("footer-hide");
               $(".wrig-widget-blog-footer").removeClass("footer-hide");
            });
            $(".wrig-sidebar-area").scrollTop(0);
         }
      });

      $("#wrig-woocommerce-widget").on("click", function () {
         if (!$(this).hasClass("wrig-product-widget")) {
            $(".wrig-all-widget-canvas").fadeOut("slow", function () {
               $(".wrig-woocommerce-widget-canvas").fadeIn("slow");
               $(
                  ".wrig-woocommerce-widget-canvas .wrig-sidebar-content"
               ).fadeIn("slow");
               $(".wrig-widget-blog-footer").addClass("footer-hide");
               $(".wrig-widget-woocommerce-footer").removeClass("footer-hide");
            });
            $(".wrig-sidebar-area").scrollTop(0);
         }
      });

      $("#wrig-writegen-mode-widget").on("click", function () {
         $(".wrig-all-widget-canvas").fadeOut("slow", function () {
            $(".wrig-writegen-mode-canvas").fadeIn("slow");
         });
         $(".wrig-sidebar-area").scrollTop(0);
      });

      $("#wrig-blog-content-widget").on("click", function () {
         if (!$(this).hasClass("wrig-post-widget")) {
            $(".wrig-all-widget-canvas").fadeOut("medium", function () {
               $(".wrig-blog-content-canvas").fadeIn("medium");
            });
            $(".wrig-sidebar-area").scrollTop(0);
         }
      });

      $("#wrig-blog-outline-widget").on("click", function () {
         if (!$(this).hasClass("wrig-post-widget")) {
            $(".wrig-all-widget-canvas").fadeOut("medium", function () {
               $(".wrig-blog-outlines-canvas").fadeIn("medium");
            });
            $(".wrig-sidebar-area").scrollTop(0);
         }
      });

      $("#wrig-blog-tags-widget").on("click", function () {
         if (!$(this).hasClass("wrig-post-widget")) {
            $(".wrig-all-widget-canvas").fadeOut("medium", function () {
               $(".wrig-blog-tags-canvas").fadeIn("medium");
            });
            $(".wrig-sidebar-area").scrollTop(0);
         }
      });

      $("#wrig-blog-rewrite-widget").on("click", function () {
         if (!$(this).hasClass("wrig-post-widget")) {
            $(".wrig-all-widget-canvas").fadeOut("medium", function () {
               $(".wrig-blogrewrite-canvas").fadeIn("medium");
            });
            $(".wrig-sidebar-area").scrollTop(0);
         }
      });

      $("#wrig-blog-brief-widget").on("click", function () {
         if (!$(this).hasClass("wrig-post-widget")) {
            $(".wrig-all-widget-canvas").fadeOut("medium", function () {
               $(".wrig-blog-brief-canvas").fadeIn("medium");
            });
            $(".wrig-sidebar-area").scrollTop(0);
         }
      });

      $("#wrig-blog-prg-compression-widget").on("click", function () {
         if (!$(this).hasClass("wrig-post-widget")) {
            $(".wrig-all-widget-canvas").fadeOut("medium", function () {
               $(".wrig-paragraph-compression-canvas").fadeIn("medium");
            });
            $(".wrig-sidebar-area").scrollTop(0);
         }
      });

      $("#wrig-blog-related-keywords-widget").on("click", function () {
         $(".wrig-all-widget-canvas").fadeOut("medium", function () {
            $(".wrig-related-tags-canvas").fadeIn("medium");
         });
         $(".wrig-sidebar-area").scrollTop(0);
      });

      $("#wrig-blog-find-question-widget").on("click", function () {
         $(".wrig-all-widget-canvas").fadeOut("medium", function () {
            $(".wrig-find-question-canvas").fadeIn("medium");
         });
         $(".wrig-sidebar-area").scrollTop(0);
      });

      $("#wrig-blog-short-story-widget").on("click", function () {
         $(".wrig-all-widget-canvas").fadeOut("medium", function () {
            $(".wrig-short-story-canvas").fadeIn("medium");
         });
         $(".wrig-sidebar-area").scrollTop(0);
      });

      $("#wrig-product-title-widget").on("click", function () {
         if (!$(this).hasClass("wrig-product-widget")) {
            $(".wrig-all-widget-canvas").fadeOut("medium", function () {
               $(".wrig-product-title-canvas").fadeIn("medium");
            });
            $(".wrig-sidebar-area").scrollTop(0);
         }
      });

      $("#wrig-product-long-des-widget").on("click", function () {
         if (!$(this).hasClass("wrig-product-widget")) {
            $(".wrig-all-widget-canvas").fadeOut("medium", function () {
               $(".wrig-product-long-desc-canvas").fadeIn("medium");
            });
            $(".wrig-sidebar-area").scrollTop(0);
         }
      });

      $("#wrig-product-short-des-widget").on("click", function () {
         if (!$(this).hasClass("wrig-product-widget")) {
            $(".wrig-all-widget-canvas").fadeOut("medium", function () {
               $(".wrig-product-short-desc-canvas").fadeIn("medium");
            });
            $(".wrig-sidebar-area").scrollTop(0);
         }
      });

      $("#wrig-blog-title-widget").on("click", function () {
         if (!$(this).hasClass("wrig-post-widget")) {
            $(".wrig-all-widget-canvas").fadeOut("medium", function () {
               $(".wrig-blog-title-canvas").fadeIn("medium");
            });
            $(".wrig-sidebar-area").scrollTop(0);
         }
      });

      //content copy
      $(".wrig-analysis-wrapper").on(
         "click",
         ".wrig-copy-content",
         function () {
            $(".wrig-copy-done").hide();
            $(this).hide();
            $(this).siblings(".wrig-copy-done").show();
            var listItem = $(this).closest(".wrig-analysis-item");

            var generatedTags = listItem.find(".wrig-generated-tags");

            if (generatedTags.length > 0) {
               var tags = generatedTags
                  .find("span")
                  .map(function () {
                     return $(this).text();
                  })
                  .get()
                  .join(", ");

               // Create a temporary input element
               var tempInput = $("<input>");

               // Set the input value to the tags content
               tempInput.val(tags);

               // Append the input element to the body
               $("body").append(tempInput);

               // Select the input content
               tempInput.select();

               // Copy the selected text to the clipboard
               document.execCommand("copy");

               // Remove the temporary input element
               tempInput.remove();
            } else {
               var text = listItem.find(".wrig-analysis-desc p").text();
               // Create a temporary input element
               var tempInput = $("<input>");

               // Set the input value to the text content
               tempInput.val(text);

               // Append the input element to the body
               $("body").append(tempInput);

               // Select the input content
               tempInput.select();

               // Copy the selected text to the clipboard
               document.execCommand("copy");

               // Remove the temporary input element
               tempInput.remove();
            }
         }
      );

      /************************************************
       *          Selected widget hide and show        *
       *************************************************/
      $(
         "#wrig-writegen-mode-widget-selector,#wrig-blog-brief-widget-selector,#wrig-blog-content-widget-selector,#wrig-blog-outlines-widget-selector,#wrig-blog-rewrite-widget-selector,#wrig-blog-tags-widget-selector,#wrig-blog-title-widget-selector,#wrig-find-question-widget-selector,#wrig-paragraph-compression-widget-selector,#wrig-product-long-desc-widget-selector,#wrig-product-short-widget-selector,#wrig-product-title-widget-selector,#wrig-related-tags-widget-selector,#wrig-short-story-widget-selector"
      ).on("change", function () {
         var selectedWidget = $(this).val();
         // Hide all widgets
         $(".wrig-sidebar-content").hide();
         if (selectedWidget == "wrig-blog-widget-canvas") {
            $(".wrig-blog-widget-canvas").show();
            $(".wrig-blog-widget-canvas .wrig-sidebar-content").show();
            $(".wrig-widget-blog-footer").removeClass("footer-hide");
         } else if (selectedWidget == "wrig-woocommerce-widget-canvas") {
            $(".wrig-woocommerce-widget-canvas").show();
            $(".wrig-woocommerce-widget-canvas .wrig-sidebar-content").show();
            $(".wrig-widget-woocommerce-footer").removeClass("footer-hide");
         } else {
            // Show the selected widget
            $("." + selectedWidget).show();
         }
      });

      /************************************************
       *           Blog Widget Condition               *
       *************************************************/
      function wrigHandleInput(inputElement, generateButton) {
         inputElement.on("input", function () {
            var inputValue = $(this).val();
            if (inputValue) {
               generateButton.addClass("wrig-btn-big-border");
            } else {
               generateButton.removeClass("wrig-btn-big-border");
            }
         });
      }

      wrigHandleInput(
         $(".wrig-search-keywords"),
         $(".wrig-generate-analysis-keyword")
      );
      wrigHandleInput($(".wrig-search-keywords"), $(".wrig-generate-title"));
      wrigHandleInput(
         $(".wrig-meta-des-title"),
         $(".wrig-generate-meta-des-btn")
      );
      wrigHandleInput(
         $(".wrig-content-title"),
         $(".wrig-generate-content-btn")
      );
      wrigHandleInput(
         $(".wrig-product-name"),
         $(".wrig-product-title-generate")
      );
      wrigHandleInput(
         $(".wrig-product-long-title"),
         $(".wrig-generate-long-des-btn")
      );
      wrigHandleInput(
         $(".wrig-product-short-title"),
         $(".wrig-generate-short-des-btn")
      );
      wrigHandleInput(
         $(".wrig-writegen-content"),
         $(".wrig-writegen-mode-btn")
      );
      wrigHandleInput(
         $(".wrig-single-blog-keywords"),
         $(".wrig-single-blog-title-btn")
      );
      wrigHandleInput(
         $(".wrig-blog-conten-title"),
         $(".wrig-blog-content-btn")
      );
      wrigHandleInput(
         $(".wrig-blog-outlines-title"),
         $(".wrig-blog-outlines-btn")
      );
      wrigHandleInput($(".wrig-blog-tags-title"), $(".wrig-blog-tags-btn"));
      wrigHandleInput(
         $(".wrig-blogrewrite-content"),
         $(".wrig-blogrewrite-btn")
      );
      wrigHandleInput($(".wrig-blog-brief-content"), $(".wrig-blog-brief-btn"));
      wrigHandleInput(
         $(".wrig-paragraph-compression-content"),
         $(".wrig-paragraph-compression-btn")
      );
      wrigHandleInput(
         $(".wrig-related-tags-content"),
         $(".wrig-related-tags-btn")
      );
      wrigHandleInput(
         $(".wrig-find-question-content"),
         $(".wrig-find-question-btn")
      );
      wrigHandleInput(
         $(".wrig-short-story-content"),
         $(".wrig-short-story-btn")
      );
      wrigHandleInput(
         $(".wrig-single-product-title"),
         $(".wrig-single-product-title-btn")
      );
      wrigHandleInput(
         $(".wrig-single-product-long-desc-title"),
         $(".wrig-single-product-long-desc-btn")
      );
      wrigHandleInput(
         $(".wrig-single-product-short-desc-title"),
         $(".wrig-single-product-short-desc-btn")
      );

      $(".wrig-sidebar-footer-btn.wrig-sidebar-next-btn").on(
         "click",
         function () {
            if ($(".wrig-meta-description").hasClass("active")) {
               var inputValue = $(".wrig-content-title").val();
               var elementToChange = $(".wrig-generate-content-btn");

               if (inputValue) {
                  elementToChange.css("border-color", "blue");
               } else {
                  elementToChange.css("border-color", ""); // Reset border color if input is empty
               }

               $(".wrig-content-title").on("input", function () {
                  var inputValue = $(this).val();
                  var elementToChange = $(".wrig-generate-content-btn");

                  if (inputValue) {
                     elementToChange.css("border-color", "blue");
                  } else {
                     elementToChange.css("border-color", ""); // Reset border color if input is empty
                  }
               });
            }
         }
      );

      //blog item value insert next title box
      $(".wrig-title-item-show").on(
         "click",
         ".wrig-analysis-item",
         function () {
            var titleText = $(this).find(".wrig-analysis-desc p").text();
            $(".wrig-meta-des-title").val(titleText);
            $(".wrig-content-title").val(titleText);
            $(".wrig-analysis-item").removeClass("selected");
            $(this).addClass("selected");
         }
      );

      //Get selected keyword value and set in global variable
      $(".wrig-keyword-analysis-show").on(
         "click",
         ".wrig-analysis-item",
         function () {
            var titleText = $(this).find(".wrig-analysis-desc p").text();
            wrigAnalysisKeyword = titleText; // Store the title in the global variable
            $(".wrig-meta-des-title").val(titleText);
            $(".wrig-analysis-item").removeClass("selected");
            $(this).addClass("selected");
         }
      );

      //woocommerce item value insert next title box
      $(".wrig-product-title-item-show").on(
         "click",
         ".wrig-analysis-item",
         function () {
            var titleText = $(this).find(".wrig-analysis-desc p").text();
            $(".wrig-product-long-title").val(titleText);
            $(".wrig-product-short-title").val(titleText);
            $(".wrig-analysis-item").removeClass("selected"); // Remove 'selected' class from all items
            $(this).addClass("selected"); // Add 'selected' class to the clicked item
         }
      );

      // blog title selected value
      $(".wrig-meta-description-item-show").on(
         "click",
         ".wrig-analysis-item",
         function () {
            var titleText = $(".wrig-meta-des-title").val();
            var metaDescription = $(this).find(".wrig-analysis-desc p").text();
            $(".wrig-content-title").val(titleText);
            $(".wrig-content-metades").val(metaDescription);
            $(".wrig-analysis-item").removeClass("selected");
            $(this).addClass("selected");
         }
      );

      // Error handle function
      function wrigShowError(message) {
         $(".wrig-api-error").show();
         $(".wrig-api-error span").text(message);
      }

      /**********************************************
       *              Blog Widget                    *
       **********************************************/
      // Analysis keywords generate
      $(".wrig-generate-analysis-keyword").on("click", function () {
         if ($(".wrig-blog-title").hasClass("active")) {
            if (wrigAnalysisKeyword) {
               var searchKeywords = wrigAnalysisKeyword;
            } else {
               var searchKeywords = $(".wrig-search-keywords").val();
            }
            var selectedLanguage = $(
               ".wrig-select-analysis-keywords-language"
            ).val();
            var keywordMaxResult = $(".wrig-analysis-keywords-number").val();

            var credentials = wrigSerpApiLogin + ":" + wrigSerpApiPassword;
            var encodedCredentials = btoa(credentials);
            // Get the current year
            var currentYear = new Date().getFullYear();
            // Create a date string in the format "YYYY-MM-DD" with the same date (January 1st)
            var currentDate = currentYear + "-01-01";

            var promptText =
               "Generate " + keywordMaxResult + " SEO-friendly related keyword";
            promptText += " about " + searchKeywords;
            promptText += " in " + selectedLanguage + " language\n";

            //Check if wrigOpenApiKey and input value is Not Empty
            if (!wrigOpenApiKey || !searchKeywords) {
               wrigShowError(
                  !wrigOpenApiKey
                     ? "Please insert your open API key from settings."
                     : "Please fill up requered input field."
               );
               return;
            }

            $.ajax({
               url: "https://api.openai.com/v1/completions",
               type: "POST",
               headers: {
                  "Content-Type": "application/json",
                  Authorization: "Bearer " + wrigOpenApiKey,
               },
               data: JSON.stringify({
                  model: "gpt-3.5-turbo-instruct",
                  prompt: promptText,
                  max_tokens: 1500,
                  temperature: 1,
               }),
               beforeSend: function () {
                  $(".wrig-loader-container").show();
                  $(".wrig-api-error").hide();
               },
               success: function (response) {
                  var generatedContent = response.choices[0].text;
                  var titleArray = generatedContent
                     .split(/\d+\.\s/)
                     .filter(Boolean)
                     .map(function (title) {
                        return title.trim();
                     });
                  // Merge the titleArray into a single array with comma-separated keywords
                  var mergedKeywords = [searchKeywords, ...titleArray].filter(
                     Boolean
                  );

                  $.ajax({
                     type: "POST",
                     url: "https://api.dataforseo.com/v3/keywords_data/google_ads/search_volume/live",
                     timeout: 0,
                     headers: {
                        "Content-Type": "application/json",
                        Authorization: "Basic " + encodedCredentials,
                     },
                     data: JSON.stringify([
                        {
                           language_code: "en",
                           keywords: mergedKeywords,
                           date_from: currentDate,
                        },
                     ]),
                     success: function (response) {
                        // Assuming the given object is named "response"
                        var resultArray = response.tasks[0].result;
                        if (resultArray !== null) {
                           var charts = [];
                           resultArray.map(function (keywordData, index) {
                              var keyword = keywordData.keyword;
                              var competition = keywordData.competition;
                              var cpc = keywordData.low_top_of_page_bid;
                              var searchVolume = keywordData.search_volume;
                              var monthlySearch = keywordData.monthly_searches;
                              var searchVolumeArray = monthlySearch.map(
                                 (item) => item.search_volume
                              );
                              var chartId = "chart" + (index + 1);
                              // Array of month names
                              var monthNames = [
                                 "Jan",
                                 "Feb",
                                 "Mar",
                                 "Apr",
                                 "May",
                                 "Jun",
                                 "Jul",
                                 "Aug",
                                 "Sep",
                                 "Oct",
                                 "Nov",
                                 "Dec",
                              ];

                              // Extracting month names from data
                              var monthArray = monthlySearch.map(
                                 (item) => monthNames[item.month - 1]
                              );
                              // chart js
                              var ChartOptions = {
                                 series: [
                                    {
                                       name: "Users",
                                       data: searchVolumeArray,
                                    },
                                 ],
                                 chart: {
                                    type: "bar",
                                    height: 350,
                                 },
                                 plotOptions: {
                                    bar: {
                                       horizontal: false,
                                       columnWidth: "55%",
                                       endingShape: "rounded",
                                       distributed: false,
                                    },
                                 },
                                 dataLabels: {
                                    enabled: false,
                                 },
                                 legend: {
                                    show: false,
                                 },
                                 stroke: {
                                    show: false,
                                    width: 2,
                                    colors: ["transparent"],
                                 },
                                 colors: ["#D0D1FF"],
                                 xaxis: {
                                    categories: monthArray,
                                 },
                                 yaxis: {
                                    show: false,
                                 },
                                 fill: {
                                    opacity: 1,
                                 },
                                 tooltip: {
                                    theme: "dark",
                                    y: {
                                       formatter: function (val) {
                                          return val + "";
                                       },
                                    },
                                 },
                              };

                              var blogItem = `
                            <div class="wrig-analysis-item">
                                <h3 class="wrig-analysis-title">Draft ${
                                   index + 1
                                }</h3>
                                <div class="wrig-analysis-content">
                                <div class="wrig-analysis-desc">
                                    <p>${keyword}</p>
                                </div>
                                <div class="wrig-analysis-meta-wrapper wrig-d-flex wrig-justify-content-between">
                                    <div class="wrig-analysis-meta">
                                    <span class="wrig-badge wrig-badge-success">CPC: $${cpc}</span>
                                    <span class="wrig-badge wrig-badge-danger">Competition: ${competition}</span>
                                    </div>
                                    <div class="wrig-analysis-action">
                                    <button class="wrig-analysis-action-btn wrig-analysis-open-btn">Analysis 
                                        <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </button>
                                    </div>
                                </div>
                                </div>
                                <div class="wrig-analysis-info-wrapper" style="display: none;">
                                <div class="wrig-container">
                                    <div class="wrig-row">
                                    <h3 class="wrig-analysis-info-sec-title">Keyword Analysis</h3>
                                    </div>
                                </div>
                                <div class="wrig-container">
                                                <div class="wrig-row wrig-gx-4">
                                                    <div class="wrig-col-4">
                                                    <div class="wrig-analysis-info-item">
                                                        <div class="wrig-analysis-info-bg"></div>
                                                        <div class="wrig-analysis-info-icon">
                                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6.77777 12.5555C9.96874 12.5555 12.5555 9.96874 12.5555 6.77777C12.5555 3.5868 9.96874 1 6.77777 1C3.5868 1 1 3.5868 1 6.77777C1 9.96874 3.5868 12.5555 6.77777 12.5555Z" stroke="currentColor" stroke-opacity="0.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                                <path d="M14.0001 14L10.8584 10.8583" stroke="currentColor" stroke-opacity="0.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                        </div>
                                                        <h3 class="wrig-analysis-info-title">Search</h3>
                                                        <span class="wrig-analysis-info-number">${searchVolume}</span></span>
                                                    </div>
                                                    </div>
                                                    <div class="wrig-col-4">
                                                    <div class="wrig-analysis-info-item wrig-analysis-info-success">
                                                        <div class="wrig-analysis-info-bg"></div>
                                                        <div class="wrig-analysis-info-icon">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M9.49988 5.00006V4.00006H7.49988V2.50006H6.49988V4.00006H5.49988C5.23474 4.00033 4.98054 4.10577 4.79306 4.29325C4.60558 4.48073 4.50014 4.73493 4.49988 5.00006V6.50006C4.50014 6.7652 4.60558 7.0194 4.79306 7.20687C4.98054 7.39435 5.23474 7.49979 5.49988 7.50006H8.49988V9.00006H4.49988V10.0001H6.49988V11.5001H7.49988V10.0001H8.49988C8.765 9.99975 9.01918 9.8943 9.20665 9.70683C9.39412 9.51936 9.49957 9.26518 9.49988 9.00006V7.50006C9.49961 7.23492 9.39417 6.98072 9.20669 6.79325C9.01921 6.60577 8.76501 6.50032 8.49988 6.50006H5.49988V5.00006H9.49988Z" fill="currentColor" fill-opacity="0.4"/>
                                                                <path d="M7 1C8.18669 1 9.34673 1.35189 10.3334 2.01118C11.3201 2.67047 12.0892 3.60754 12.5433 4.7039C12.9974 5.80025 13.1162 7.00665 12.8847 8.17054C12.6532 9.33443 12.0818 10.4035 11.2426 11.2426C10.4035 12.0818 9.33443 12.6532 8.17054 12.8847C7.00666 13.1162 5.80026 12.9974 4.7039 12.5433C3.60755 12.0891 2.67047 11.3201 2.01118 10.3334C1.3519 9.34673 1 8.18669 1 7C1.00466 5.41013 1.6383 3.88671 2.76251 2.7625C3.88672 1.63829 5.41014 1.00466 7 1ZM7 0C5.61553 0 4.26215 0.410543 3.11101 1.17971C1.95987 1.94888 1.06266 3.04213 0.532846 4.32122C0.00303298 5.6003 -0.13559 7.00776 0.134506 8.36563C0.404603 9.7235 1.07129 10.9708 2.05026 11.9497C3.02922 12.9287 4.2765 13.5954 5.63437 13.8655C6.99224 14.1356 8.3997 13.997 9.67879 13.4672C10.9579 12.9373 12.0511 12.0401 12.8203 10.889C13.5895 9.73785 14 8.38447 14 7C13.9946 5.14515 13.2553 3.36783 11.9437 2.05626C10.6322 0.744678 8.85485 0.00543459 7 0Z" fill="currentColor" fill-opacity="0.4"/>
                                                            </svg>
                                                        </div>
                                                        <h3 class="wrig-analysis-info-title">CPC:</h3>
                                                        <span class="wrig-analysis-info-number"><span>$</span>${cpc}</span>
                                                    </div>
                                                    </div>
                                                    <div class="wrig-col-4">
                                                    <div class="wrig-analysis-info-item wrig-analysis-info-danger">
                                                        <div class="wrig-analysis-info-bg"></div>
                                                        <div class="wrig-analysis-info-icon">
                                                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M0.928571 0H0V12.0714C0 12.3177 0.0978313 12.5539 0.271972 12.728C0.446113 12.9022 0.682299 13 0.928571 13H13V12.0714H0.928571V0Z" fill="currentColor" fill-opacity="0.4"/>
                                                                <path d="M13 3.25H9.75004V4.17857H11.4168L7.89289 7.7025L5.90111 5.70607C5.85794 5.66255 5.80659 5.62801 5.75002 5.60444C5.69344 5.58087 5.63275 5.56874 5.57146 5.56874C5.51017 5.56874 5.44949 5.58087 5.39291 5.60444C5.33633 5.62801 5.28498 5.66255 5.24182 5.70607L1.85718 9.09536L2.51182 9.75L5.57146 6.69036L7.56325 8.68679C7.60641 8.7303 7.65776 8.76484 7.71434 8.78841C7.77092 8.81199 7.8316 8.82412 7.89289 8.82412C7.95418 8.82412 8.01487 8.81199 8.07145 8.78841C8.12802 8.76484 8.17937 8.7303 8.22253 8.68679L12.0715 4.83321V6.5H13V3.25Z" fill="currentColor" fill-opacity="0.4"/>
                                                            </svg>
                                                        </div>
                                                        <h3 class="wrig-analysis-info-title">Competition</h3>
                                                        <span class="wrig-analysis-info-number">${competition}</span>
                                                    </div>
                                                    </div>
                                                </div> <!-- row -->
                                                <div class="wrig-row">
                                                    <div class="wrig-col-12">
                                                    <div class="wrig-analysis-chart">
                                                        <h3 class="wrig-analysis-chart-title">Bar Charts</h3>
                
                                                        <div class="wrig-analysis-chart-content">
                                                            <div id="${chartId}"></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div> <!-- container -->
                                <!-- Rest of the HTML code for keyword analysis section -->
                                </div>
                            </div>
                            `;
                              $(".wrig-keyword-analysis-show").append(blogItem);
                              // Create chart instance and store in the array
                              var chart = new ApexCharts(
                                 document.querySelector(
                                    `.wrig-keyword-analysis-show #${chartId}`
                                 ),
                                 ChartOptions
                              );
                              charts.push(chart);
                              // Render all charts in the array
                              charts.forEach(function (chart) {
                                 chart.render();
                              });
                           });
                        } else {
                           $(".wrig-loader-container").hide();
                           $(".wrig-api-error").show();
                           $(".wrig-api-error span").text(
                              "Please check your api usages and limitation."
                           );
                        }
                     },
                     error: function (error) {
                        $(".wrig-loader-container").hide();
                        $(".wrig-api-error").show();
                        $(".wrig-api-error span").text(
                           "Please check your api usages and limitation."
                        );
                     },
                  });
               },
               error: function (error) {},
               complete: function () {
                  $(".wrig-loader-container").hide();
               },
            });
         }
      });

      // Blog Title generate
      $(".wrig-generate-title").on("click", function () {
         if ($(".wrig-blog-title").hasClass("active")) {
            var searchKeywords = $(".wrig-search-keywords").val();
            var context = $(".wrig-context").val();
            var selectedLanguage = $(".wrig-select-language").val();
            var selectedTone = $(".wrig-select-tone").val();
            var selectedWritingStyle = $(".wrig-select-writing-style").val();
            var titleMaxResult = $(".wrig-quantity-title").val();

            var promptText = "Generate SEO-friendly blog titles";
            if (searchKeywords && context) {
               promptText +=
                  " related to " + searchKeywords + " and " + context;
            } else if (searchKeywords) {
               promptText += " about " + searchKeywords;
            } else if (context) {
               promptText += " on " + context;
            }
            promptText +=
               " in " +
               selectedLanguage +
               " language with a " +
               selectedTone +
               " tone and " +
               selectedWritingStyle +
               " writing style:\n";

            for (var i = 1; i <= titleMaxResult; i++) {
               promptText += i + ". \n";
            }

            $.ajax({
               url: "https://api.openai.com/v1/completions",
               type: "POST",
               headers: {
                  "Content-Type": "application/json",
                  Authorization: "Bearer " + wrigOpenApiKey,
               },
               data: JSON.stringify({
                  model: "gpt-3.5-turbo-instruct",
                  prompt: promptText,
                  max_tokens: 1500,
                  temperature: 1,
                  n: 3,
               }),
               beforeSend: function () {
                  $(".wrig-loader-container").show();
                  $(".wrig-api-error").hide();
               },
               success: function (response) {
                  // Handle the response from the API
                  var generatedTitles = response.choices[0].text
                     .split("\n")
                     .slice(1, titleMaxResult + 1)
                     .map(function (title) {
                        return title.replace(/"/g, ""); // Remove all double quotation marks
                     });
                  generatedTitles.forEach(function (title, index) {
                     // Remove the numbers from the title
                     var cleanedTitle = title.replace(/^\d+\.\s*/, "");
                     var blogItem = `
                        <div class="wrig-analysis-item">
                        <h3 class="wrig-analysis-title">Draft ${index + 1}</h3>
                        <div class="wrig-analysis-content">
                            <div class="wrig-analysis-desc">
                            <p>${cleanedTitle}</p>
                            </div>
                        </div>
                        </div>`;
                     $(".wrig-title-item-show").append(blogItem);
                  });
               },
               error: function (error) {
                  $(".wrig-loader-container").hide();
                  $(".wrig-api-error").show();
                  $(".wrig-api-error span").text(
                     "Please check your api usages and limitation."
                  );
               },
               complete: function () {
                  $(".wrig-loader-container").hide();
               },
            });
         }
      });

      //generate meta description
      $(".wrig-generate-meta-des-btn").on("click", function () {
         if ($(".wrig-blog-meta-description").hasClass("active")) {
            var titleText = $(".wrig-meta-des-title").val();
            var focusKeyword = $(".wrig-meta-des-focus-keyword").val();
            var numberOfTitles = $(".wrig-blog-metadesch-number").val();
            var promptText = "Generate SEO-friendly meta descriptions";

            if (titleText && focusKeyword) {
               promptText +=
                  " for " + titleText + " with a focus on " + focusKeyword;
            } else if (titleText) {
               promptText += " for " + titleText;
            } else if (focusKeyword) {
               promptText += " related to " + focusKeyword;
            }

            promptText += ":\n";

            for (var i = 1; i <= numberOfTitles; i++) {
               promptText += i + ". \n";
            }

            $.ajax({
               url: "https://api.openai.com/v1/completions",
               type: "POST",
               headers: {
                  "Content-Type": "application/json",
                  Authorization: "Bearer " + wrigOpenApiKey,
               },
               data: JSON.stringify({
                  model: "gpt-3.5-turbo-instruct",
                  prompt: promptText,
                  max_tokens: 1500,
                  temperature: 1,
                  n: 3,
               }),
               beforeSend: function () {
                  $(".wrig-loader-container").show();
                  $(".wrig-api-error").hide();
               },
               success: function (response) {
                  // Handle the response from the API
                  var generatedTitles = response.choices[0].text
                     .split("\n")
                     .slice(1, numberOfTitles + 1);
                  generatedTitles.forEach(function (title, index) {
                     // Remove the numbers from the title
                     var cleanedTitle = title.replace(/^\d+\.\s*/, "");
                     var blogItem = `
                        <div class="wrig-analysis-item">
                            <h3 class="wrig-analysis-title">Draft ${
                               index + 1
                            }</h3>
                            <div class="wrig-analysis-content">
                            <div class="wrig-analysis-desc">
                                <p>${cleanedTitle}</p>
                            </div>
                            </div>
                        </div>
                        `;
                     $(".wrig-meta-description-item-show").append(blogItem);
                  });
               },
               error: function (error) {
                  $(".wrig-loader-container").hide();
                  $(".wrig-api-error").show();
                  $(".wrig-api-error span").text(
                     "Please check your api usages and limitation."
                  );
               },
               complete: function () {
                  $(".wrig-loader-container").hide();
               },
            });
         }
      });

      //generate blog content
      $(".wrig-generate-content-btn").on("click", function () {
         if ($(".wrig-blog-content").hasClass("active")) {
            var titleText = $(".wrig-content-title").val();
            var metaDescription = $(".wrig-content-metades").val();
            var words = $(".wrig-words-length").val();

            var promptText =
               "Generate words SEO-friendly blog content. The content should be approximately" +
               words +
               "words long ";

            if (titleText && metaDescription) {
               promptText +=
                  " for " + titleText + " with a focus on " + metaDescription;
            } else if (titleText) {
               promptText += " for " + titleText;
            } else if (metaDescription) {
               promptText += " related to " + metaDescription;
            }

            $.ajax({
               url: "https://api.openai.com/v1/completions",
               type: "POST",
               headers: {
                  "Content-Type": "application/json",
                  Authorization: "Bearer " + wrigOpenApiKey,
               },
               data: JSON.stringify({
                  model: "gpt-3.5-turbo-instruct",
                  prompt: promptText,
                  max_tokens: 4000,
                  temperature: 1,
               }),
               beforeSend: function () {
                  $(".wrig-loader-container").show();
                  $(".wrig-api-error").hide();
               },
               success: function (response) {
                  // Handle the response from the API
                  var generatedContent = response.choices[0].text;
                  var formattedContent = generatedContent
                     .replace(/^\n{2}/, "")
                     .replace(/\n/g, "<br>");

                  if (typeof wp.blocks !== "undefined") {
                     $(".editor-post-title").text(titleText);
                     $(".wrig-meta-description").val(metaDescription);
                     wp.data.dispatch("core/editor").editPost({
                        content: "<p>" + formattedContent + "</p>",
                     });
                  } else {
                     // Insert generated content into the Classic editor
                     $("#title-prompt-text").text("");
                     $("#title").val(titleText);
                     $(".wrig-meta-description").val(metaDescription);
                     // Insert generated content into WordPress editor
                     var editor = document.getElementById("content_ifr");
                     var editorDocument =
                        editor.contentDocument || editor.contentWindow.document;
                     editorDocument.getElementById("tinymce").innerHTML =
                        formattedContent;
                  }
               },
               error: function (error) {
                  $(".wrig-loader-container").hide();
                  $(".wrig-api-error").show();
                  $(".wrig-api-error span").text(
                     "Please check your api usages and limitation."
                  );
               },
               complete: function () {
                  $(".wrig-loader-container").hide();
               },
            });
         }
      });

      /**********************************************
       *            Woocommerce Widget              *
       **********************************************/
      // woocommerce product title generate
      $(".wrig-product-title-generate").on("click", function () {
         if ($(".wrig-product-title").hasClass("active")) {
            var productName = $(".wrig-product-name").val();
            var productBrief = $(".wrig-product-brief").val();
            var selectedLanguage = $(".wrig-product-language").val();
            var selectedTone = $(".wrig-product-tone").val();
            var selectedWritingStyle = $(".wrig-product-writing-style").val();
            var titleMaxResult = $(".wrig-product-max-result").val();

            var promptText =
               "Generate " + titleMaxResult + " SEO-friendly product titles";
            if (productName && productBrief) {
               promptText +=
                  " related to " + productName + " and " + productBrief;
            } else if (productName) {
               promptText += " about " + productName;
            } else if (productBrief) {
               promptText += " on " + productBrief;
            }
            promptText +=
               " in " +
               selectedLanguage +
               " language with a " +
               selectedTone +
               " tone and " +
               selectedWritingStyle +
               " writing style:\n";

            //Check if wrigOpenApiKey and input value is Not Empty
            if (!wrigOpenApiKey || !productName) {
               wrigShowError(
                  !wrigOpenApiKey
                     ? "Please insert your open API key from settings."
                     : "Please insert requered input."
               );
               return;
            }

            $.ajax({
               url: "https://api.openai.com/v1/completions",
               type: "POST",
               headers: {
                  "Content-Type": "application/json",
                  Authorization: "Bearer " + wrigOpenApiKey,
               },
               data: JSON.stringify({
                  model: "gpt-3.5-turbo-instruct",
                  prompt: promptText,
                  max_tokens: 1500,
                  temperature: 1,
               }),
               beforeSend: function () {
                  $(".wrig-loader-container").show();
                  $(".wrig-api-error").hide();
               },
               success: function (response) {
                  // Handle the response from the API
                  var generatedContent = response.choices[0].text;
                  var titleArray = generatedContent
                     .split(/\d+\.\s/)
                     .filter(Boolean);

                  // Check if the first element is empty and remove it
                  if (titleArray[0].trim() === "") {
                     titleArray.shift();
                  }

                  $(".wrig-product-title-result").empty(); // Clear previous results
                  titleArray.forEach(function (title, index) {
                     // Remove the numbers from the title
                     var cleanedTitle = title.replace(/^\d+\.\s*/, "");
                     var blogItem = `
                        <div class="wrig-analysis-item">
                        <h3 class="wrig-analysis-title">Draft ${index + 1}</h3>
                        <div class="wrig-analysis-content">
                            <div class="wrig-analysis-desc">
                            <p>${cleanedTitle}</p>
                            </div>
                        </div>
                        </div>
                    `;
                     $(".wrig-product-title-item-show").append(blogItem);
                  });
               },
               error: function (error) {
                  $(".wrig-loader-container").hide();
                  $(".wrig-api-error").show();
                  $(".wrig-api-error span").text(
                     "Please check your api usages and limitation."
                  );
               },
               complete: function () {
                  $(".wrig-loader-container").hide();
               },
            });
         }
      });

      //woocommerce product long description generate
      $(".wrig-generate-long-des-btn").on("click", function () {
         if ($(".wrig-product-long-des").hasClass("active")) {
            var titleText = $(".wrig-product-long-title").val();
            var context = $(".wrig-product-long-context").val();
            var language = $(".wrig-product-des-language").val();
            var tone = $(".wrig-product-des-tone").val();
            var writingStyle = $(".wrig-product-des-w-style").val();
            var words = $(".wrig-product-long-length").val();

            var promptText = "Generate product long description";

            if (titleText && context) {
               promptText +=
                  " for " + titleText + " with a focus on " + context;
            } else if (titleText) {
               promptText += " for " + titleText;
            } else if (context) {
               promptText += " related to " + context;
            }

            promptText +=
               " in " +
               language +
               " language with a " +
               tone +
               " tone and " +
               writingStyle +
               " writing style, within " +
               words +
               " words";

            $.ajax({
               url: "https://api.openai.com/v1/completions",
               type: "POST",
               headers: {
                  "Content-Type": "application/json",
                  Authorization: "Bearer " + wrigOpenApiKey,
               },
               data: JSON.stringify({
                  model: "gpt-3.5-turbo-instruct",
                  prompt: promptText,
                  max_tokens: 3000,
                  temperature: 1,
               }),
               beforeSend: function () {
                  $(".wrig-loader-container").show();
                  $(".wrig-api-error").hide();
               },
               success: function (response) {
                  // Handle the response from the API
                  var generatedContent = response.choices[0].text;
                  var formattedContent = generatedContent
                     .replace(/^\n{2}/, "")
                     .replace(/\n/g, "<br>");

                  $("#title-prompt-text").text("");
                  // Insert generated title into WordPress title input
                  $("#title").val(titleText);

                  // Insert generated content into WordPress editor
                  var editor = document.getElementById("content_ifr");
                  var editorDocument =
                     editor.contentDocument || editor.contentWindow.document;
                  editorDocument.getElementById("tinymce").innerHTML =
                     formattedContent;
               },
               error: function (error) {
                  $(".wrig-loader-container").hide();
                  $(".wrig-api-error").show();
                  $(".wrig-api-error span").text(
                     "Please check your api usages and limitation."
                  );
               },
               complete: function () {
                  $(".wrig-loader-container").hide();
               },
            });
         }
      });

      //woocommerce product short description generate
      $(".wrig-generate-short-des-btn").on("click", function () {
         if ($(".wrig-product-short-des").hasClass("active")) {
            var titleText = $(".wrig-product-short-title").val();
            var context = $(".wrig-product-short-context").val();
            var language = $(".wrig-product-short-language").val();
            var tone = $(".wrig-product-short-tone").val();
            var writingStyle = $(".wrig-product-short-w-style").val();
            var words = $(".wrig-product-short-length").val();

            var promptText = "Generate product short description";

            if (titleText && context) {
               promptText +=
                  " for " + titleText + " with a focus on " + context;
            } else if (titleText) {
               promptText += " for " + titleText;
            } else if (context) {
               promptText += " related to " + context;
            }

            promptText +=
               " in " +
               language +
               " language with a " +
               tone +
               " tone and " +
               writingStyle +
               " writing style, within " +
               words +
               " words";

            $.ajax({
               url: "https://api.openai.com/v1/completions",
               type: "POST",
               headers: {
                  "Content-Type": "application/json",
                  Authorization: "Bearer " + wrigOpenApiKey,
               },
               data: JSON.stringify({
                  model: "gpt-3.5-turbo-instruct",
                  prompt: promptText,
                  max_tokens: 1500,
                  temperature: 1,
               }),
               beforeSend: function () {
                  $(".wrig-loader-container").show();
                  $(".wrig-api-error").hide();
               },
               success: function (response) {
                  // Handle the response from the API
                  var generatedContent = response.choices[0].text;
                  var formattedContent = generatedContent
                     .replace(/^\n{2}/, "")
                     .replace(/\n/g, "<br>");

                  // Insert generated content into WooCommerce short description editor
                  var editors = tinymce.editors;
                  if (editors.length > 1) {
                     var shortDescriptionEditor = editors[1];
                     shortDescriptionEditor.setContent(formattedContent);
                  }
               },
               error: function (error) {
                  $(".wrig-loader-container").hide();
                  $(".wrig-api-error").show();
                  $(".wrig-api-error span").text(
                     "Please check your api usages and limitation."
                  );
               },
               complete: function () {
                  $(".wrig-loader-container").hide();
               },
            });
         }
      });

      /**********************************************
       *             WriteGen Mode                  *
       **********************************************/
      $(".wrig-writegen-mode-btn").on("click", function () {
         var content = $(".wrig-writegen-content").val();
         var selectedWritingStyle = $(".wrig-writegen-writingstyle").val();
         var titleMaxResult = $(".wrig-writegen-quantity").val();
         var promptText =
            "Write about this topic " +
            content +
            " with a " +
            selectedWritingStyle +
            " writing style:\n";

         for (var i = 1; i <= parseInt(titleMaxResult); i++) {
            promptText += i + ".\n";
         }

         //Check if wrigOpenApiKey and input value is Not Empty
         if (!wrigOpenApiKey || !content) {
            wrigShowError(
               !wrigOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrigOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 3500,
               temperature: 1,
               n: parseInt(titleMaxResult),
            }),
            beforeSend: function () {
               $(".wrig-loader-container").show();
               $(".wrig-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedTitles = response.choices.map(function (choice) {
                  return choice.text.trim();
               });

               generatedTitles.forEach(function (title, index) {
                  if (title.trim() !== "") {
                     // Remove the numbers from the title
                     var cleanedTitle = title.replace(/^\d+\.\s*/, "");
                     var blogItem = `
                            <div class="wrig-analysis-item">
                            <h3 class="wrig-analysis-title">Draft ${
                               index + 1
                            }</h3> 
                            <div class="wrig-analysis-content">
                                <div class="wrig-analysis-desc">
                                    <p>${cleanedTitle}</p>
                                </div>
                            </div>
                                <div class="wrig-copy-content wrig-copy">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                            </div>
                            <div class="wrig-copy-content wrig-copy-done">
                                <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                            </div>
                            </div>`;
                     $(".wrig-writegen-item-show").append(blogItem);
                  }
               });
            },
            error: function (error) {
               $(".wrig-loader-container").hide();
               $(".wrig-api-error").show();
               $(".wrig-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrig-loader-container").hide();
            },
         });
      });

      /**********************************************
       *              Blog title                    *
       **********************************************/
      $(".wrig-single-blog-title-btn").on("click", function () {
         var blogKeywords = $(".wrig-single-blog-keywords").val();
         var selectedLanguage = $(".wrig-single-blog-language").val();
         var selectedTone = $(".wrig-single-blog-tone").val();
         var selectedWritingStyle = $(".wrig-single-blog-writing-style").val();
         var titleMaxResult = $(".wrig-single-blog-max-result").val();

         var promptText =
            "Generate " + titleMaxResult + " SEO-friendly blog titles";
         promptText += " related to " + blogKeywords;

         promptText +=
            " in " +
            selectedLanguage +
            " language with a " +
            selectedTone +
            " tone and " +
            selectedWritingStyle +
            " writing style:\n";

         //Check if wrigOpenApiKey and input value is Not Empty
         if (!wrigOpenApiKey || !blogKeywords) {
            wrigShowError(
               !wrigOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrigOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 1500,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrig-loader-container").show();
               $(".wrig-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var titleArray = generatedContent
                  .split(/\d+\.\s/)
                  .filter(Boolean);

               // Check if the first element is empty and remove it
               if (titleArray[0].trim() === "") {
                  titleArray.shift();
               }

               $(".wrig-product-title-result").empty(); // Clear previous results

               titleArray.forEach(function (title, index) {
                  var titleItems = `
                    <div class="wrig-analysis-item">
                        <h3 class="wrig-analysis-title">Draft ${index + 1}</h3> 
                        <div class="wrig-analysis-content">
                            <div class="wrig-analysis-desc">
                                <p>${title.trim()}</p>
                            </div>
                        </div>
                        <div class="wrig-copy-content wrig-copy">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                        </div>
                        <div class="wrig-copy-content wrig-copy-done">
                            <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                        </div>
                    </div>`;
                  // Append each question as a separate item
                  $(".wrig-blog-title-result").append(titleItems);
               });
            },
            error: function (error) {
               $(".wrig-loader-container").hide();
               $(".wrig-api-error").show();
               $(".wrig-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrig-loader-container").hide();
            },
         });
      });

      /**********************************************
       *              Blog Content                  *
       **********************************************/
      $(".wrig-blog-content-btn ").on("click", function () {
         var titleText = $(".wrig-blog-conten-title").val();
         var language = $(".wrig-blog-content-language").val();
         var tone = $(".wrig-blog-content-tone").val();
         var writingStyle = $(".wrig-blog-content-wr-style").val();
         var words = $(".wrig-blog-content-length").val();

         var promptText =
            "Generate SEO-Friedly blog description about" + titleText;

         promptText +=
            " in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            writingStyle +
            " writing style, within " +
            words +
            "words";

         //Check if wrigOpenApiKey and input value is Not Empty
         if (!wrigOpenApiKey || !titleText) {
            wrigShowError(
               !wrigOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrigOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 4000,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrig-loader-container").show();
               $(".wrig-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var formattedContent = generatedContent
                  .replace(/^\n{2}/, "")
                  .replace(/\n/g, "<br>");
               // Insert generated content into WordPress editor
               var editor = document.getElementById("content_ifr");
               var editorDocument =
                  editor.contentDocument || editor.contentWindow.document;
               editorDocument.getElementById("tinymce").innerHTML =
                  formattedContent;
            },
            error: function (error) {
               $(".wrig-loader-container").hide();
               $(".wrig-api-error").show();
               $(".wrig-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrig-loader-container").hide();
            },
         });
      });
      /**********************************************
       *              Blog Outlines                  *
       **********************************************/
      $(".wrig-blog-outlines-btn").on("click", function () {
         var titleText = $(".wrig-blog-outlines-title").val();
         var language = $(".wrig-blog-outlines-language").val();
         var tone = $(".wrig-blog-outlines-tone").val();
         var writingStyle = $(".wrig-blog-outlines-wr-style").val();
         var titleMaxResult = $(".wrig-blog-outlines-length").val();

         var promptText =
            "Generate blog outlines about " +
            titleText +
            " in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            writingStyle +
            " writing style:\n";

         for (var i = 1; i <= titleMaxResult; i++) {
            promptText += i + ".\n";
            for (var j = 1; j <= 3; j++) {
               // Assuming 3 sub-titles (A, B, C) for each main title (I, II, III)
               promptText += i + String.fromCharCode(64 + j) + ".\n";
            }
         }
         //Check if wrigOpenApiKey and input value is Not Empty
         if (!wrigOpenApiKey || !titleText) {
            wrigShowError(
               !wrigOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrigOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 3500,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrig-loader-container").show();
               $(".wrig-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var outlinesArray = generatedContent.split("\n").filter(Boolean);

               // If you want to display the outlines as grouped items, you can use the following code:
               $(".wrig-blog-outlines-item-show").empty();
               var mainTitle = "";
               var blogItem = "";
               outlinesArray.forEach(function (title, index) {
                  // Remove the numbers and extra spaces from the title
                  var cleanedTitle = title.replace(/^\d+\.\s*/, "").trim();

                  if (cleanedTitle.includes(".")) {
                     // Subtitle (e.g., A., B., C.)
                     blogItem += `
                            <p>${cleanedTitle}</p>`;
                  } else {
                     // Main Title (e.g., I., II., III.)
                     if (blogItem !== "") {
                        // Append the previous blogItem to the container if it exists
                        $(".wrig-blog-outlines-item-show").append(blogItem);
                     }
                     mainTitle = cleanedTitle;
                     blogItem = `
                            <div class="wrig-analysis-item">
                            <h3 class="wrig-analysis-title">${mainTitle}</h3> 
                            <div class="wrig-analysis-content">
                                <div class="wrig-analysis-desc">`;
                  }
               });
               // Append the last blogItem to the container
               if (blogItem !== "") {
                  $(".wrig-blog-outlines-item-show").append(blogItem);
               }
            },
            error: function (error) {
               $(".wrig-loader-container").hide();
               $(".wrig-api-error").show();
               $(".wrig-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrig-loader-container").hide();
            },
         });
      });
      /**********************************************
       *               Blog tags                    *
       **********************************************/
      $(".wrig-blog-tags-btn").on("click", function () {
         var titleText = $(".wrig-blog-tags-title").val();
         var language = $(".wrig-blog-tags-language").val();
         var tone = $(".wrig-blog-tags-tone").val();
         var writingStyle = $(".wrig-blog-tags-wr-style").val();
         var maxTags = $(".wrig-blog-tags-length").val();

         var promptText =
            "Generate SEO-Friendly " +
            maxTags +
            " blog tags about " +
            titleText;

         promptText +=
            " separate with comma" +
            " in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            writingStyle +
            " writing style";

         //Check if wrigOpenApiKey and input value is Not Empty
         if (!wrigOpenApiKey || !titleText) {
            wrigShowError(
               !wrigOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrigOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 4000,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrig-loader-container").show();
               $(".wrig-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var tagsArray = generatedContent.split(",");

               // Wrap each tag in <span> tags
               var formattedTags = tagsArray.map(function (tag) {
                  return "<span>" + tag.trim() + "</span>";
               });

               var titleItems = `
                <div class="wrig-analysis-item">
                    <div class="wrig-analysis-content">
                    <div class="wrig-analysis-desc">
                        <div class="wrig-generated-tags">${formattedTags.join(
                           " "
                        )}</div>
                    </div>
                    </div>
                    <div class="wrig-copy-content wrig-copy">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                        </div>
                        <div class="wrig-copy-content wrig-copy-done">
                            <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                        </div>
                </div>`;

               $(".wrig-blog-tags-result").append(titleItems);
            },
            error: function (error) {
               $(".wrig-loader-container").hide();
               $(".wrig-api-error").show();
               $(".wrig-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrig-loader-container").hide();
            },
         });
      });

      /**********************************************
       *              Blog rewrite                  *
       **********************************************/
      $(".wrig-blogrewrite-btn").on("click", function () {
         var contentText = $(".wrig-blogrewrite-content").val();
         var language = $(".wrig-blogrewrite-language").val();
         var tone = $(".wrig-blogrewrite-tone").val();
         var writingStyle = $(".wrig-blogrewrite-writing-style").val();
         var words = $(".wrig-blog-content-length").val();

         var promptText =
            "Rewrite this content to create an SEO-friendly blog description:\n" +
            contentText;

         promptText +=
            "\n\nRewrite the content in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            writingStyle +
            " writing style, keeping it within " +
            words +
            " words.";

         //Check if wrigOpenApiKey and input value is Not Empty
         if (!wrigOpenApiKey || !contentText) {
            wrigShowError(
               !wrigOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrigOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo",
               prompt: promptText,
               max_tokens: 4000,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrig-loader-container").show();
               $(".wrig-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var formattedContent = generatedContent
                  .replace(/^\n{2}/, "")
                  .replace(/\n/g, "<br>");
               // Insert generated content into WordPress editor
               var editor = document.getElementById("content_ifr");
               var editorDocument =
                  editor.contentDocument || editor.contentWindow.document;
               editorDocument.getElementById("tinymce").innerHTML =
                  formattedContent;
            },
            error: function (error) {
               $(".wrig-loader-container").hide();
               $(".wrig-api-error").show();
               $(".wrig-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrig-loader-container").hide();
            },
         });
      });

      /**********************************************
       *              Blog Brief                    *
       **********************************************/
      $(".wrig-blog-brief-btn").on("click", function () {
         var content = $(".wrig-blog-brief-content").val();
         var language = $(".wrig-blog-brief-language").val();
         var tone = $(".wrig-blog-brief-tone").val();
         var selectedWritingStyle = $(".wrig-blog-brief-w-style").val();
         var titleMaxResult = $(".wrig-blog-brief-quantity").val();
         var promptText =
            "Generate blog brief about this topic " +
            content +
            " in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            selectedWritingStyle +
            " writing style:\n";

         for (var i = 1; i <= parseInt(titleMaxResult); i++) {
            promptText += i + ".\n";
         }

         //Check if wrigOpenApiKey and input value is Not Empty
         if (!wrigOpenApiKey || !content) {
            wrigShowError(
               !wrigOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrigOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 3500,
               temperature: 1,
               n: parseInt(titleMaxResult),
            }),
            beforeSend: function () {
               $(".wrig-loader-container").show();
               $(".wrig-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedTitles = response.choices.map(function (choice) {
                  return choice.text.trim();
               });

               generatedTitles.forEach(function (title, index) {
                  if (title.trim() !== "") {
                     // Remove the numbers from the title
                     var cleanedTitle = title.replace(/^\d+\.\s*/, "");
                     var blogItem = `
                            <div class="wrig-analysis-item">
                            <h3 class="wrig-analysis-title">Draft ${
                               index + 1
                            }</h3> 
                            <div class="wrig-analysis-content">
                                <div class="wrig-analysis-desc">
                                    <p>${cleanedTitle}</p>
                                </div>
                            </div>
                            <div class="wrig-copy-content wrig-copy">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                            </div>
                            <div class="wrig-copy-content wrig-copy-done">
                            <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                            </div>
                            </div>`;
                     $(".wrig-blog-brief-item-show").append(blogItem);
                  }
               });
            },
            error: function (error) {
               $(".wrig-loader-container").hide();
               $(".wrig-api-error").show();
               $(".wrig-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrig-loader-container").hide();
            },
         });
      });

      /**********************************************
       *          Paragraph Compression             *
       **********************************************/
      $(".wrig-paragraph-compression-btn").on("click", function () {
         var content = $(".wrig-paragraph-compression-content").val();
         var language = $(".wrig-paragraph-compression-language").val();
         var tone = $(".wrig-paragraph-compression-tone").val();
         var selectedWritingStyle = $(
            ".wrig-paragraph-compression-w-style"
         ).val();
         var compressionRatio = $(".wrig-paragraph-compression-ratio").val();

         var promptText =
            "Compress the following paragraph:\n" +
            content +
            "\n\nUsing " +
            compressionRatio +
            " compression ratio, rewrite it in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            selectedWritingStyle +
            " writing style.";

         //Check if wrigOpenApiKey and input value is Not Empty
         if (!wrigOpenApiKey || !content) {
            wrigShowError(
               !wrigOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrigOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 3500,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrig-loader-container").show();
               $(".wrig-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var blogItem = `
                <div class="wrig-analysis-item">
                    <div class="wrig-analysis-content">
                        <div class="wrig-analysis-desc">
                            <p>${generatedContent}</p>
                        </div>
                    </div>
                    <div class="wrig-copy-content wrig-copy">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                </div>
                <div class="wrig-copy-content wrig-copy-done">
                    <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                </div>
                </div>`;
               // Insert generated content into a HTML element for display
               $(".wrig-paragraph-compression-result").append(blogItem);
            },
            error: function (error) {
               $(".wrig-loader-container").hide();
               $(".wrig-api-error").show();
               $(".wrig-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrig-loader-container").hide();
            },
         });
      });

      /**********************************************
       *            Related Keywords                *
       **********************************************/
      $(".wrig-related-tags-btn").on("click", function () {
         var titlekeywords = $(".wrig-related-tags-content").val();
         var language = $(".wrig-related-tags-language").val();
         var tone = $(".wrig-related-tags-tone").val();
         var writingStyle = $(".wrig-related-tags-w-style").val();
         var maxTags = $(".wrig-related-tags-number").val();

         var promptText =
            "Generate " +
            maxTags +
            " SEO-Friendly keywords related to " +
            titlekeywords;

         promptText +=
            " in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            writingStyle +
            " writing style.";

         //Check if wrigOpenApiKey and input value is Not Empty
         if (!wrigOpenApiKey || !titlekeywords) {
            wrigShowError(
               !wrigOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrigOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 4000,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrig-loader-container").show();
               $(".wrig-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var blogItem = `
                <div class="wrig-analysis-item">
                    <div class="wrig-analysis-content">
                        <div class="wrig-analysis-desc">
                            <p>${generatedContent}</p>
                        </div>
                    </div>
                    <div class="wrig-copy-content wrig-copy">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                </div>
                <div class="wrig-copy-content wrig-copy-done">
                    <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                </div>
                </div>`;
               // Insert generated content into a HTML element for display
               $(".wrig-related-tags-result").append(blogItem);

               $(".wrig-loader-container").hide();
            },
            error: function (error) {
               $(".wrig-loader-container").hide();
               $(".wrig-api-error").show();
               $(".wrig-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
         });
      });

      /**********************************************
       *             Find Question                  *
       **********************************************/
      $(".wrig-find-question-btn").on("click", function () {
         var titleKeywords = $(".wrig-find-question-content").val();
         var language = $(".wrig-find-question-language").val();
         var tone = $(".wrig-find-question-tone").val();
         var writingStyle = $(".wrig-find-question-w-style").val();
         var maxQuestions = $(".wrig-find-question-number").val();

         var promptText =
            "Generate " +
            maxQuestions +
            " SEO-Friendly questions related to " +
            titleKeywords;

         promptText +=
            " in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            writingStyle +
            " writing style:\n";

         //Check if wrigOpenApiKey and input value is Not Empty
         if (!wrigOpenApiKey || !titlekeywords) {
            wrigShowError(
               !wrigOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrigOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 4000,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrig-loader-container").show();
               $(".wrig-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var questionsArray = generatedContent
                  .split(/\d+\.\s/)
                  .filter(Boolean);

               // Check if the first element is empty and remove it
               if (questionsArray[0].trim() === "") {
                  questionsArray.shift();
               }

               $(".wrig-find-question-result").empty(); // Clear previous results

               questionsArray.forEach(function (question, index) {
                  var questionItem = `
                    <div class="wrig-analysis-item">
                        <h3 class="wrig-analysis-title">Draft ${index + 1}</h3> 
                        <div class="wrig-analysis-content">
                            <div class="wrig-analysis-desc">
                            <p>${question.trim()}</p>
                            </div>
                        </div>
                        <div class="wrig-copy-content wrig-copy">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                    </div>
                    <div class="wrig-copy-content wrig-copy-done">
                        <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                    </div>
                    </div>`;
                  // Append each question as a separate item
                  $(".wrig-find-question-result").append(questionItem);
               });
            },
            error: function (error) {
               $(".wrig-loader-container").hide();
               $(".wrig-api-error").show();
               $(".wrig-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrig-loader-container").hide();
            },
         });
      });

      /**********************************************
       *              Short Story                   *
       **********************************************/
      $(".wrig-short-story-btn").on("click", function () {
         var content = $(".wrig-short-story-content").val();
         var language = $(".wrig-short-story-language").val();
         var tone = $(".wrig-pshort-story-tone").val();
         var selectedWritingStyle = $(".wrig-short-story-w-style").val();
         var storyLength = $(".wrig-short-story-length").val();

         var promptText =
            "Generate a " +
            storyLength +
            " words short story about the following topic:\n\n" +
            content +
            "in" +
            language +
            " language with a " +
            tone +
            " tone and " +
            selectedWritingStyle +
            " writing style.";

         //Check if wrigOpenApiKey and input value is Not Empty
         if (!wrigOpenApiKey || !content) {
            wrigShowError(
               !wrigOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrigOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 3500,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrig-loader-container").show();
               $(".wrig-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var blogItem = `
                <div class="wrig-analysis-item">
                    <div class="wrig-analysis-content">
                        <div class="wrig-analysis-desc">
                            <p>${generatedContent}</p>
                        </div>
                    </div>
                    <div class="wrig-copy-content wrig-copy">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                </div>
                <div class="wrig-copy-content wrig-copy-done">
                    <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                </div>
                </div>`;
               // Insert generated content into a HTML element for display
               $(".wrig-short-story-result").append(blogItem);
            },
            error: function (error) {
               $(".wrig-loader-container").hide();
               $(".wrig-api-error").show();
               $(".wrig-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrig-loader-container").hide();
            },
         });
      });

      /**********************************************
       *       Woocommerce product title            *
       **********************************************/
      $(".wrig-single-product-title-btn").on("click", function () {
         var productName = $(".wrig-single-product-title").val();
         var productKeywords = $(".wrig-single-product-keywords").val();
         var selectedLanguage = $(".wrig-single-product-language").val();
         var selectedTone = $(".wrig-single-product-tone").val();
         var selectedWritingStyle = $(
            ".wrig-single-product-writing-style"
         ).val();
         var titleMaxResult = $(".wrig-single-product-max-result").val();

         var promptText =
            "Generate " + titleMaxResult + " SEO-friendly product titles";
         if (productName && productKeywords) {
            promptText +=
               " related to " + productName + " and " + productKeywords;
         } else if (productName) {
            promptText += " about " + productName;
         } else if (productKeywords) {
            promptText += " on " + productKeywords;
         }
         promptText +=
            " in " +
            selectedLanguage +
            " language with a " +
            selectedTone +
            " tone and " +
            selectedWritingStyle +
            " writing style:\n";

         //Check if wrigOpenApiKey and input value is Not Empty
         if (!wrigOpenApiKey || !productName) {
            wrigShowError(
               !wrigOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrigOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 1500,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrig-loader-container").show();
               $(".wrig-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var titleArray = generatedContent
                  .split(/\d+\.\s/)
                  .filter(Boolean);

               // Check if the first element is empty and remove it
               if (titleArray[0].trim() === "") {
                  titleArray.shift();
               }

               $(".wrig-product-title-result").empty(); // Clear previous results

               titleArray.forEach(function (title, index) {
                  var titleItems = `
                    <div class="wrig-analysis-item">
                        <h3 class="wrig-analysis-title">Draft ${index + 1}</h3> 
                        <div class="wrig-analysis-content">
                            <div class="wrig-analysis-desc">
                                <p>${title.trim()}</p>
                            </div>
                        </div>
                        <div class="wrig-copy-content wrig-copy">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21 8C21 6.34315 19.6569 5 18 5H10C8.34315 5 7 6.34315 7 8V20C7 21.6569 8.34315 23 10 23H18C19.6569 23 21 21.6569 21 20V8ZM19 8C19 7.44772 18.5523 7 18 7H10C9.44772 7 9 7.44772 9 8V20C9 20.5523 9.44772 21 10 21H18C18.5523 21 19 20.5523 19 20V8Z" fill="#0F0F0F"></path> <path d="M6 3H16C16.5523 3 17 2.55228 17 2C17 1.44772 16.5523 1 16 1H6C4.34315 1 3 2.34315 3 4V18C3 18.5523 3.44772 19 4 19C4.55228 19 5 18.5523 5 18V4C5 3.44772 5.44772 3 6 3Z" fill="#0F0F0F"></path> </g></svg>
                    </div>
                    <div class="wrig-copy-content wrig-copy-done">
                        <svg fill="#0F0F0F" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon fill-rule="evenodd" points="9.707 14.293 19 5 20.414 6.414 9.707 17.121 4 11.414 5.414 10"></polygon> </g></svg>
                    </div>
                    </div>`;
                  // Append each question as a separate item
                  $(".wrig-product-title-result").append(titleItems);
               });
            },
            error: function (error) {
               $(".wrig-loader-container").hide();
               $(".wrig-api-error").show();
               $(".wrig-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrig-loader-container").hide();
            },
         });
      });

      /**********************************************
       *       Woocommerce long description         *
       **********************************************/
      $(".wrig-single-product-long-desc-btn").on("click", function () {
         var titleText = $(".wrig-single-product-long-desc-title").val();
         var keyWords = $(".wrig-single-product-long-desc-keywords").val();
         var language = $(".wrig-single-product-long-desc-language").val();
         var tone = $(".wrig-single-product-long-desc-tone").val();
         var writingStyle = $(".wrig-single-product-long-desc-w-style").val();
         var words = $(".wrig-single-product-long-desc-length").val();

         var promptText = "Generate product long description";

         if (titleText && keyWords) {
            promptText += " for " + titleText + " with a focus on " + keyWords;
         } else if (titleText) {
            promptText += " for " + titleText;
         } else if (keyWords) {
            promptText += " related to " + keyWords;
         }

         promptText +=
            " in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            writingStyle +
            " writing style, within " +
            words +
            " words";

         //Check if wrigOpenApiKey and input value is Not Empty
         if (!wrigOpenApiKey || !titleText) {
            wrigShowError(
               !wrigOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrigOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 3000,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrig-loader-container").show();
               $(".wrig-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var formattedContent = generatedContent
                  .replace(/^\n{2}/, "")
                  .replace(/\n/g, "<br>");

               $("#title-prompt-text").text("");
               // Insert generated title into WordPress title input
               $("#title").val(titleText);

               // Insert generated content into WordPress editor
               var editor = document.getElementById("content_ifr");
               var editorDocument =
                  editor.contentDocument || editor.contentWindow.document;
               editorDocument.getElementById("tinymce").innerHTML =
                  formattedContent;
            },
            error: function (error) {
               $(".wrig-loader-container").hide();
               $(".wrig-api-error").show();
               $(".wrig-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrig-loader-container").hide();
            },
         });
      });

      /**********************************************
       *      Woocommerce Short description         *
       **********************************************/
      $(".wrig-single-product-short-desc-btn").on("click", function () {
         var titleText = $(".wrig-single-product-short-desc-title").val();
         var kewords = $(".wrig-single-product-short-desc-keywords").val();
         var language = $(".wrig-single-product-short-desc-language").val();
         var tone = $(".wrig-single-product-short-desc-tone").val();
         var writingStyle = $(".wrig-single-product-short-desc-w-style").val();
         var words = $(".wrig-single-product-short-desc-length").val();

         var promptText = "Generate product short description";

         if (titleText && kewords) {
            promptText += " for " + titleText + " with a focus on " + kewords;
         } else if (titleText) {
            promptText += " for " + titleText;
         } else if (kewords) {
            promptText += " related to " + kewords;
         }
         //Check if wrigOpenApiKey and input value is Not Empty
         if (!wrigOpenApiKey || !titleText) {
            wrigShowError(
               !wrigOpenApiKey
                  ? "Please insert your open API key from settings."
                  : "Please insert requered input."
            );
            return;
         }

         promptText +=
            " in " +
            language +
            " language with a " +
            tone +
            " tone and " +
            writingStyle +
            " writing style, within " +
            words +
            " words";

         $.ajax({
            url: "https://api.openai.com/v1/completions",
            type: "POST",
            headers: {
               "Content-Type": "application/json",
               Authorization: "Bearer " + wrigOpenApiKey,
            },
            data: JSON.stringify({
               model: "gpt-3.5-turbo-instruct",
               prompt: promptText,
               max_tokens: 1500,
               temperature: 1,
            }),
            beforeSend: function () {
               $(".wrig-loader-container").show();
               $(".wrig-api-error").hide();
            },
            success: function (response) {
               // Handle the response from the API
               var generatedContent = response.choices[0].text;
               var formattedContent = generatedContent
                  .replace(/^\n{2}/, "")
                  .replace(/\n/g, "<br>");

               // Insert generated content into WooCommerce short description editor
               var editors = tinymce.editors;
               if (editors.length > 1) {
                  var shortDescriptionEditor = editors[1];
                  shortDescriptionEditor.setContent(formattedContent);
               }
            },
            error: function (error) {
               $(".wrig-loader-container").hide();
               $(".wrig-api-error").show();
               $(".wrig-api-error span").text(
                  "Please check your api usages and limitation."
               );
            },
            complete: function () {
               $(".wrig-loader-container").hide();
            },
         });
      });

      /**********************************************
       *            Widget save settings            *
       **********************************************/
      $(".wrig-settings-widget-save-btn").on("click", function () {
         var nonce = $("#wrig-save-settings-nonce").val();

         var data = {
            wrig_blog_widget: $(".wrig-blog-widget").prop("checked")
               ? $(".wrig-blog-widget").val()
               : null,
            wrig_woocommerce_widget: $(".wrig-woocommerce-widget").prop(
               "checked"
            )
               ? $(".wrig-woocommerce-widget").val()
               : null,
            wrig_writegen_mode: $(".wrig-writegen-mode").prop("checked")
               ? $(".wrig-writegen-mode").val()
               : null,
            wrig_blog_title: $(".wrig-blog-title").prop("checked")
               ? $(".wrig-blog-title").val()
               : null,
            wrig_blog_content: $(".wrig-blog-content").prop("checked")
               ? $(".wrig-blog-content").val()
               : null,
            wrig_blog_outline: $(".wrig-blog-outline").prop("checked")
               ? $(".wrig-blog-outline").val()
               : null,
            wrig_blog_tags: $(".wrig-blog-tags").prop("checked")
               ? $(".wrig-blog-tags").val()
               : null,
            wrig_rewrite_content: $(".wrig-rewrite-content").prop("checked")
               ? $(".wrig-rewrite-content").val()
               : null,
            wrig_brief_generate: $(".wrig-brief-generate").prop("checked")
               ? $(".wrig-brief-generate").val()
               : null,
            wrig_paragraph_compression: $(".wrig-paragraph-compression").prop(
               "checked"
            )
               ? $(".wrig-paragraph-compression").val()
               : null,
            wrig_related_keywords: $(".wrig-related-keyword").prop("checked")
               ? $(".wrig-related-keyword").val()
               : null,
            wrig_find_question: $(".wrig-fing-question").prop("checked")
               ? $(".wrig-fing-question").val()
               : null,
            wrig_short_story: $(".wrig-short-story").prop("checked")
               ? $(".wrig-short-story").val()
               : null,
            wrig_woocommerce_product_title: $(
               ".wrig-woocommerce-product-title"
            ).prop("checked")
               ? $(".wrig-woocommerce-product-title").val()
               : null,
            wrig_woocommerce_short_desc: $(".wrig-woocommerce-short-desc").prop(
               "checked"
            )
               ? $(".wrig-woocommerce-short-desc").val()
               : null,
            wrig_woocommerce_long_desc: $(".wrig-woocommerce-long-desc").prop(
               "checked"
            )
               ? $(".wrig-woocommerce-long-desc").val()
               : null,
         };

         $.ajax({
            type: "POST",
            url: wrigHomeUrl + "/wp-json/writegen/v1/allwidgetsettings",
            data: data,
            headers: {
               "X-wrig-Nonce": nonce,
            },
            beforeSend: function () {
               // Show loading spinner
               $(".wrig-save-loader").show();
            },
            success: function (response) {},
            error: function (error) {
               wrigShowToast("Something wrong try again.");
               $(".wrig-save-loader").hide();
               $(".wrig-settings-api-save-btn svg").show();
            },
            complete: function () {
               // Actions to be taken after the request is complete
               wrigShowToastWidget("Saved successfully!");
               $(".wrig-save-loader").hide();
               $(".wrig-settings-api-save-btn svg").show();
            },
         });
      });

      /**********************************************
       *           API settings             *
       **********************************************/
      $(".wrig-save-setting-btn").on("click", function () {
         var nonce = $("#wrig-save-settings-nonce").val();
         var data = {
            wrig_open_api_key: $(".wrig-openapi-key").val(),
            wrig_serp_analytics: $(".wrig-serp-analytics").prop("checked")
               ? $(".wrig-serp-analytics").val()
               : null,
            wrig_serp_api_login: $(".wrig-serp-api-login").val(),
            wrig_serp_api_password: $(".wrig-serp-api-password").val(),
         };

         $.ajax({
            type: "POST",
            url: wrigHomeUrl + "/wp-json/writegen/v1/settings",
            data: data,
            headers: {
               "X-wrig-Nonce": nonce,
            },
            beforeSend: function () {
               // Show loading spinner
               $(".wrig-save-loader").show();
            },
            success: function (response) {},
            error: function (error) {
               wrigShowToast("Something wrong try again.");
               $(".wrig-save-loader").hide();
               $(".wrig-settings-api-save-btn svg").show();
            },
            complete: function (message) {
               wrigShowToast("Saved successfully!");
               $(".wrig-save-loader").hide();
               $(".wrig-settings-api-save-btn svg").show();
            },
         });
      });
   });
})(jQuery);
