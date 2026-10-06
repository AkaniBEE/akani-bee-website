# Client / sponsor logos

Drop logo files here, then list them in `$client_logos` in `index.php`.

    $client_logos = [
      ['name' => 'Company Name', 'logo' => 'images/clients/company.png', 'url' => 'https://example.co.za'],
    ];

`url` is optional — omit it and the logo renders unlinked.

## What works best

- **Transparent PNG or SVG.** The strip renders logos in greyscale and
  brings them to full colour on hover, so a logo baked onto a white
  rectangle will show as a visible box against the grey section background.
- Around **400 x 160**, artwork trimmed close to the edges. Logos are scaled
  to a uniform 48px height, so excess padding inside the file makes one logo
  look smaller than its neighbours.
- Horizontal (landscape) lock-ups sit better in a strip than stacked ones.

The section only appears once at least one logo is listed, and the list is
repeated automatically so even two or three logos scroll without a gap.
