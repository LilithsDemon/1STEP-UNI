function showUploadWidget() {
    cloudinary.openUploadWidget(
      {
        cloudName: "ddtjltqkz",
        uploadPreset: "preset1",
        sources: [
          "local",
          "url",
          "camera",
          "image_search",
          "google_drive",
          "dropbox",
        ],
        googleApiKey: "<image_search_google_api_key>",
        showAdvancedOptions: true,
        cropping: true,
        multiple: false,
        defaultSource: "local",
        styles: {
          palette: {
            window: "#000000",
            sourceBg: "#000000",
            windowBorder: "#8E9FBF",
            tabIcon: "#FFFFFF",
            inactiveTabIcon: "#8E9FBF",
            menuIcons: "#2AD9FF",
            link: "#08C0FF",
            action: "#336BFF",
            inProgress: "#00BFFF",
            complete: "#33ff00",
            error: "#EA2727",
            textDark: "#000000",
            textLight: "#FFFFFF",
          },
          fonts: {
            default: null,
            "'Space Mono', monospace": {
              url: "https://fonts.googleapis.com/css?family=Space+Mono",
              active: true,
            },
          },
        },
      },
      (err, info) => {
        if (!err) {
          console.log("Upload Widget event - ", info);
        }
      }
    );
  }