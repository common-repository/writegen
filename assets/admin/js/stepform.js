(function ($) {
   "use strict";

   // Checking button status ( wether or not next/previous and
   // submit should be displayed )
   $(".wrig-editor-button").on("click", function () {
      const checkButtons = (activeStep, stepsCount) => {
         const prevBtn = $("#wizard-prev");
         const nextBtn = $("#wizard-next");
         const submBtn = $("#wizard-subm");

         switch (activeStep / stepsCount) {
            case 0: // First Step
               prevBtn.hide();
               submBtn.hide();
               nextBtn.show();
               break;
            case 1: // Last Step
               nextBtn.hide();
               prevBtn.show();
               submBtn.show();
               break;
            default:
               submBtn.hide();
               prevBtn.show();
               nextBtn.show();
         }
      };

      // Scrolling the form to the middle of the screen if the form
      // is taller than the viewHeight
      const scrollWindow = (activeStepHeight, viewHeight) => {
         if (viewHeight < activeStepHeight) {
            $(window).scrollTop(
               $(steps[activeStep]).offset().top - viewHeight / 2
            );
         }
      };

      $(function () {
         // Form step counter (little cirecles at the top of the form)
         const wizardSteps = $(".wizard-header .wizard-step");
         // Form steps (actual steps)
         const steps = $(".wizard-body .step");
         // Number of steps (counting from 0)
         const stepsCount = steps.length - 1;
         // Screen Height
         const viewHeight = $(window).height();
         // Current step being shown (counting from 0)
         let activeStep = 0;
         // Height of the current step
         let activeStepHeight = $(steps[activeStep]).height();

         checkButtons(activeStep, stepsCount);
         // setWizardHeight(activeStepHeight);
         // Previous button handler
         $("#wizard-prev").click(() => {
            // Sliding out current step
            $(steps[activeStep]).removeClass("active");
            $(wizardSteps[activeStep]).removeClass("active");

            activeStep--;

            // Sliding in previous Step
            $(steps[activeStep]).removeClass("off").addClass("active");
            $(wizardSteps[activeStep]).addClass("active");

            activeStepHeight = $(steps[activeStep]).height();
            checkButtons(activeStep, stepsCount);
         });

         // Next button handler
         $(".wrig-title-item-show").on(
            "click",
            ".wrig-analysis-item",
            function () {
               var titleText = $(this).find(".wrig-analysis-desc p").text();
               if (titleText) {
                  $(".wrig-sidebar-next-btn").removeClass(
                     "wrig-next-btn-disable"
                  );
                  $("#wizard-next").click(() => {
                     // Sliding out current step
                     $(".wrig-sidebar-area").scrollTop(0);
                     $(steps[activeStep])
                        .removeClass("inital")
                        .addClass("off")
                        .removeClass("active");
                     $(wizardSteps[activeStep]).removeClass("active");

                     // Next step
                     activeStep++;

                     // Sliding in next step
                     $(steps[activeStep]).addClass("active");
                     $(wizardSteps[activeStep]).addClass("active");

                     activeStepHeight = $(steps[activeStep]).height();
                     checkButtons(activeStep, stepsCount);
                  });
               }
            }
         );
      });
   });

   $(".block-editor__container").on(
      "click",
      ".wrig-gutenberg-button",
      function () {
         const checkButtons = (activeStep, stepsCount) => {
            const prevBtn = $("#wizard-prev");
            const nextBtn = $("#wizard-next");
            const submBtn = $("#wizard-subm");

            switch (activeStep / stepsCount) {
               case 0: // First Step
                  prevBtn.hide();
                  submBtn.hide();
                  nextBtn.show();
                  break;
               case 1: // Last Step
                  nextBtn.hide();
                  prevBtn.show();
                  submBtn.show();
                  break;
               default:
                  submBtn.hide();
                  prevBtn.show();
                  nextBtn.show();
            }
         };

         // Scrolling the form to the middle of the screen if the form
         // is taller than the viewHeight
         const scrollWindow = (activeStepHeight, viewHeight) => {
            if (viewHeight < activeStepHeight) {
               $(window).scrollTop(
                  $(steps[activeStep]).offset().top - viewHeight / 2
               );
            }
         };

         $(function () {
            // Form step counter (little cirecles at the top of the form)
            const wizardSteps = $(".wizard-header .wizard-step");
            // Form steps (actual steps)
            const steps = $(".wizard-body .step");
            // Number of steps (counting from 0)
            const stepsCount = steps.length - 1;
            // Screen Height
            const viewHeight = $(window).height();
            // Current step being shown (counting from 0)
            let activeStep = 0;
            // Height of the current step
            let activeStepHeight = $(steps[activeStep]).height();

            checkButtons(activeStep, stepsCount);
            // setWizardHeight(activeStepHeight);
            // Previous button handler
            $("#wizard-prev").click(() => {
               // Sliding out current step
               $(steps[activeStep]).removeClass("active");
               $(wizardSteps[activeStep]).removeClass("active");

               activeStep--;

               // Sliding in previous Step
               $(steps[activeStep]).removeClass("off").addClass("active");
               $(wizardSteps[activeStep]).addClass("active");

               activeStepHeight = $(steps[activeStep]).height();
               checkButtons(activeStep, stepsCount);
            });

            // Next button handler
            // Next button handler
            $(".wrig-title-item-show").on(
               "click",
               ".wrig-analysis-item",
               function () {
                  var titleText = $(this).find(".wrig-analysis-desc p").text();
                  if (titleText) {
                     $(".wrig-sidebar-next-btn").removeClass(
                        "wrig-next-btn-disable"
                     );
                     $("#wizard-next").click(() => {
                        $(".wrig-sidebar-area").scrollTop(0);
                        // Sliding out current step
                        $(steps[activeStep])
                           .removeClass("inital")
                           .addClass("off")
                           .removeClass("active");
                        $(wizardSteps[activeStep]).removeClass("active");

                        // Next step
                        activeStep++;

                        // Sliding in next step
                        $(steps[activeStep]).addClass("active");
                        $(wizardSteps[activeStep]).addClass("active");

                        activeStepHeight = $(steps[activeStep]).height();
                        checkButtons(activeStep, stepsCount);
                     });
                  }
               }
            );
         });
      }
   );

   $(".wrig-wc-editor-button").on("click", function () {
      const checkButtons = (activeStep, stepsCount) => {
         const prevBtn = $("#wrig-wc-wizard-prev");
         const nextBtn = $("#wrig-wc-wizard-next");
         const submBtn = $("#wizard-subm");

         switch (activeStep / stepsCount) {
            case 0: // First Step
               prevBtn.hide();
               submBtn.hide();
               nextBtn.show();
               break;
            case 1: // Last Step
               nextBtn.hide();
               prevBtn.show();
               submBtn.show();
               break;
            default:
               submBtn.hide();
               prevBtn.show();
               nextBtn.show();
         }
      };

      // Scrolling the form to the middle of the screen if the form
      // is taller than the viewHeight
      const scrollWindow = (activeStepHeight, viewHeight) => {
         if (viewHeight < activeStepHeight) {
            $(window).scrollTop(
               $(steps[activeStep]).offset().top - viewHeight / 2
            );
         }
      };

      $(function () {
         // Form step counter (little cirecles at the top of the form)
         const wizardSteps = $(".wrig-wc-widzard-header .wrig-wc-wizard-step");
         // Form steps (actual steps)
         const steps = $(".wrig-wc-wizard-body .step");
         // Number of steps (counting from 0)
         const stepsCount = steps.length - 1;
         // Screen Height
         const viewHeight = $(window).height();
         // Current step being shown (counting from 0)
         let activeStep = 0;
         // Height of the current step
         let activeStepHeight = $(steps[activeStep]).height();

         checkButtons(activeStep, stepsCount);
         // setWizardHeight(activeStepHeight);
         // Previous button handler
         $("#wrig-wc-wizard-prev").click(() => {
            // Sliding out current step
            $(steps[activeStep]).removeClass("active");
            $(wizardSteps[activeStep]).removeClass("active");

            activeStep--;

            // Sliding in previous Step
            $(steps[activeStep]).removeClass("off").addClass("active");
            $(wizardSteps[activeStep]).addClass("active");

            activeStepHeight = $(steps[activeStep]).height();
            checkButtons(activeStep, stepsCount);
         });

         // Next button handler
         $(".wrig-product-title-item-show").on(
            "click",
            ".wrig-analysis-item",
            function () {
               var titleText = $(this).find(".wrig-analysis-desc p").text();
               if (titleText) {
                  $(".wrig-sidebar-next-btn").removeClass(
                     "wrig-next-btn-disable"
                  );
                  $("#wrig-wc-wizard-next").click(() => {
                     $(".wrig-sidebar-area").scrollTop(0);
                     // Sliding out current step
                     $(steps[activeStep])
                        .removeClass("inital")
                        .addClass("off")
                        .removeClass("active");
                     $(wizardSteps[activeStep]).removeClass("active");

                     // Next step
                     activeStep++;

                     // Sliding in next step
                     $(steps[activeStep]).addClass("active");
                     $(wizardSteps[activeStep]).addClass("active");

                     activeStepHeight = $(steps[activeStep]).height();
                     checkButtons(activeStep, stepsCount);
                  });
               }
            }
         );
      });
   });
})(jQuery);
