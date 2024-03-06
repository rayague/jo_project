                  // Function to open the modal
                  function openModal() {
                    document.getElementById("myModal").classList.remove("hidden");
                }

                // Function to close the modal
                function closeModal() {
                    document.getElementById("myModal").classList.add("hidden");
                }

                // Function to handle project creation (you can customize this function)
                function createProject() {
                    var projectName = document.getElementById("projectName").value;
                    var projectDescription = document.getElementById("projectDescription").value;
                    var inviteFriend = document.getElementById("inviteFriend").value;

                    // Add your logic to handle the project creation here
                    console.log("Project Name: " + projectName);
                    console.log("Project Description: " + projectDescription);
                    console.log("Invite Friend: " + inviteFriend);

                    // Close the modal after handling the creation
                    closeModal();
                }

                // Event listener to open the modal when the button is clicked
                document.getElementById("openModalBtn").addEventListener("click", openModal);



