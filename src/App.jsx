import { useEffect, useState } from "react";
import "./App.css";
import { destroy, register, retrieve, update } from "./api/user";
import {
  Box,
  Button,
  Dialog,
  DialogActions,
  DialogContent,
  DialogTitle,
  TextField,
  Typography,
} from "@mui/material";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faStar } from "@fortawesome/free-regular-svg-icons";
import { ToastContainer, toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";
import $ from "jquery";
function App() {
  const [rows, setRows] = useState([]);
  const [createDialog, setCreateDialog] = useState(false);
  const [deleteDialog, setDeleteDialog] = useState(null);
  const [editDialog, setEditDialog] = useState(null);
  const [loading, setLoading] = useState(false);
  const [warnings, setWarnings] = useState({});

  const refreshData = () => {
    retrieve().then((res) => {
      if (res?.ok) {
        setRows(res.data);
      } else {
        toast.error(res?.message ?? "Something went wrong.");
      }
    });
  };

  useEffect(refreshData, []);

  const onDelete = () => {
    setLoading(true);
    destroy({ id: deleteDialog })
      .then((res) => {
        console.log(res);
        if (res?.ok) {
          toast.success(res?.message ?? "User has been deleted");
          refreshData();
        } else {
          toast.error(res?.message ?? "Something went wrong.");
        }
      })
      .finally(() => {
        setLoading(false);
        setDeleteDialog(null);
      });
  };

  const onEdit = (e) => {
    e.preventDefault();
    if (!loading) {
      setLoading(true);
      update({
        id: editDialog,
        name: editDialog.name,
        groupname: editDialog.groupname,
        country: editDialog.country,
        age: editDialog.age,
        thumbnail: editDialog.thumbnail,
      })
        .then((res) => {
          console.log(res);
          if (res?.ok) {
            toast.success(res?.message ?? "User has updated");
            setEditDialog(null);
            refreshData();
          } else {
            toast.error(res?.message ?? "Something went wrong.");
          }
        })
        .finally(() => {
          setLoading(false);
        });
    }
  };

  const onCreate = (e) => {
    e.preventDefault();
    if (!loading) {
      const body = {
        name: $("#name").val(),
        groupname: $("#groupname").val(),
        country: $("#country").val(),
        age: $("#age").val(),
        thumbnail: $("#thumbnail").val(),
      };

      register(body)
        .then((res) => {
          if (res?.ok) {
            toast.success(res?.message ?? "Account has been created");
            setCreateDialog(false);
            setWarnings({});
            refreshData();
          } else {
            toast.error(res?.message ?? "Something went wrong.");
            setWarnings(res?.errors);
          }
        })
        .finally(() => {
          setLoading(false);
        });
    }
  };
  return (
    <>
      <Box>
        <ToastContainer />
        <Box
          sx={{
            background: "aquamarine",
            p: 1,
          }}
        >
          <Typography variant="h3">Database</Typography>
          <Button id="btn-add" onClick={() => setCreateDialog(true)}>
            Add Idol
          </Button>
        </Box>
        {rows.map((row) => (
          <Box
            key={row.id}
            sx={{
              mt: 4,
              mb: 4,
              p: 3,
              borderTop: "2px solid black",
              borderRadius: 2,
              boxShadow: 2,
            }}
          >
            <Typography
              sx={{
                backgroundColor: "gray",
                color: "white",
                p: 1,
                borderRadius: 1,
                fontWeight: "bold",
              }}
              variant="h5"
            >
              Id: {row.id}
            </Typography>
            <Box sx={{ mt: 2, mb: 2, textAlign: "center" }}>
              <img
                src={row.thumbnail}
                alt="Thumbnail"
                title={row.thumbnail}
                style={{
                  maxWidth: "100%",
                  height: "auto",
                  borderRadius: 1,
                  boxShadow: 1,
                }}
              />
            </Box>
            <Typography
              sx={{
                backgroundColor: "lightgray",
                p: 1,
                borderRadius: 1,
                display: "flex",
                alignItems: "center",
              }}
            >
              <FontAwesomeIcon
                icon={faStar}
                color="gold"
                size="2x"
                style={{ marginRight: 8 }}
              />
              Name: {row.name}
            </Typography>
            <Typography sx={{ mt: 1 }}>Group Name: {row.groupname}</Typography>
            <Typography sx={{ mt: 1 }}>Age: {row.age}</Typography>
            <Typography sx={{ mt: 1 }}>Country: {row.country}</Typography>
            <Box sx={{ mt: 2, display: "flex", gap: 2 }}>
              <Button
                id="btn-edit"
                variant="contained"
                color="primary"
                onClick={() => setEditDialog(row)}
              >
                Edit
              </Button>
              <Button
                id="btn-delete"
                variant="contained"
                color="secondary"
                onClick={() => setDeleteDialog(row.id)}
              >
                Delete
              </Button>
            </Box>
          </Box>
        ))}

        <Dialog open={deleteDialog !== null}>
          <DialogTitle>Are you sure?</DialogTitle>
          <DialogContent>
            <Typography>
              Do you want to delete this user ID: {deleteDialog}
            </Typography>
          </DialogContent>
          <DialogActions
            sx={{
              display: deleteDialog !== null ? "flex" : "none",
            }}
          >
            <Button onClick={() => setDeleteDialog(null)} id="btn-cancel">
              Cancel
            </Button>
            <Button disabled={loading} onClick={onDelete} id="btn-confirm">
              Confirm
            </Button>
          </DialogActions>
        </Dialog>

        <Dialog open={!!editDialog}>
          <DialogTitle>Edit User</DialogTitle>
          <DialogContent>
            <Box component="form" sx={{ p: 1 }} onSubmit={onEdit}>
              <Box sx={{ mt: 1 }}>
                <TextField
                  onChange={(e) =>
                    setEditDialog({
                      ...editDialog,
                      name: e.target.value,
                    })
                  }
                  value={editDialog?.name ?? ""}
                  size="small"
                  label="Name"
                  fullWidth
                />
              </Box>
              <Box sx={{ mt: 1 }}>
                <TextField
                  onChange={(e) =>
                    setEditDialog({
                      ...editDialog,
                      groupname: e.target.value,
                    })
                  }
                  value={editDialog?.groupname ?? ""}
                  size="small"
                  label="GroupName"
                  fullWidth
                />
              </Box>
              <Box sx={{ mt: 1 }}>
                <TextField
                  onChange={(e) =>
                    setEditDialog({
                      ...editDialog,
                      country: e.target.value,
                    })
                  }
                  value={editDialog?.country ?? ""}
                  size="small"
                  label="Country"
                  fullWidth
                />
              </Box>
              <Box sx={{ mt: 1 }}>
                <TextField
                  onChange={(e) =>
                    setEditDialog({
                      ...editDialog,
                      name: e.target.value,
                    })
                  }
                  value={editDialog?.age ?? ""}
                  size="small"
                  label="Age"
                  fullWidth
                />
              </Box>
              <Box sx={{ mt: 1 }}>
                <TextField
                  onChange={(e) =>
                    setEditDialog({
                      ...editDialog,
                      name: e.target.value,
                    })
                  }
                  value={editDialog?.thumbnail ?? ""}
                  size="small"
                  label="Thumbnail"
                  fullWidth
                />
              </Box>
              <Button id="edit-btn" type="submit" sx={{ display: "none" }}>
                Submit
              </Button>
            </Box>
          </DialogContent>
          <DialogActions>
            <Button onClick={() => setEditDialog(null)} id="btn-cancel">
              Cancel
            </Button>
            <Button
              disabled={loading}
              onClick={() => {
                $("#edit-btn").trigger("click");
              }}
              id="btn-update"
            >
              Update
            </Button>
          </DialogActions>
        </Dialog>

        <Dialog open={!!createDialog}>
          <DialogTitle>Create Form</DialogTitle>
          <DialogContent>
            <Box component="form" onSubmit={onCreate}>
              <Box>
                <TextField
                  id="name"
                  label="Name"
                  variant="outlined"
                  margin="normal"
                  fullWidth
                  required
                />
                {warnings?.name ? (
                  <Typography component="small" color="error">
                    {warnings.name}
                  </Typography>
                ) : null}
              </Box>
              <Box>
                <TextField
                  id="groupname"
                  label="GroupName"
                  variant="outlined"
                  margin="normal"
                  fullWidth
                  required
                />
                {warnings?.groupname ? (
                  <Typography component="small" color="error">
                    {warnings.groupname}
                  </Typography>
                ) : null}
              </Box>
              <Box>
                <TextField
                  id="country"
                  label="Country"
                  variant="outlined"
                  margin="normal"
                  fullWidth
                  required
                />
                {warnings?.country ? (
                  <Typography component="small" color="error">
                    {warnings.country}
                  </Typography>
                ) : null}
              </Box>
              <Box>
                <TextField
                  id="age"
                  label="Age"
                  variant="outlined"
                  margin="normal"
                  fullWidth
                  required
                />
                {warnings?.age ? (
                  <Typography component="small" color="error">
                    {warnings.age}
                  </Typography>
                ) : null}
              </Box>
              <Box>
                <TextField
                  id="thumbnail"
                  label="Thumbnail"
                  variant="outlined"
                  margin="normal"
                  fullWidth
                  required
                />
                {warnings?.thumbnail ? (
                  <Typography component="small" color="error">
                    {warnings.thumbnail}
                  </Typography>
                ) : null}
              </Box>
              <Box>
                <Button
                  id="submit_btn"
                  disabled={loading}
                  type="submit"
                  sx={{ display: "none" }}
                >
                  Submit
                </Button>
              </Box>
            </Box>
          </DialogContent>
          <DialogActions>
            <Button id="btn-cancel" onClick={() => setCreateDialog(false)}>
              Close
            </Button>
            <Button
              onClick={() => {
                $("#submit_btn").trigger("click");
              }}
              id="btn-create"
            >
              Create
            </Button>
          </DialogActions>
        </Dialog>
      </Box>
    </>
  );
}

export default App;
